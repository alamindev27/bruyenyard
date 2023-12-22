<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ERC20TokenApi;
use App\Models\BuyCoin;
use App\Models\Wallet;
use App\Models\CryptoWallet;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Balance;
use App\Models\ReferUser;
use App\Models\SellCoin;


use SimpleSoftwareIO\QrCode\Facades\QrCode;


class CryptoPaymentConttroller extends Controller
{

    private $tokenApi;

    public function __construct()
    {
        $this->tokenApi = new ERC20TokenApi();
    }

    public function index()
    {
        return view('user.cryptoPayment.crypto');
    }


    public function createNewWallet(Request $request)
    {

        $request->validate([
            'coin' => 'required|string|max:255',
        ]);

        $createWallet = $this->tokenApi->createNewWallet();

        if($createWallet['success']){
            $newwallet = CryptoWallet::create([
                'user_id' => auth()->user()->id,
                "coin" => $request->coin,
                "address" => $createWallet['data']->address,
                "pk" => $createWallet['data']->privateKey,
                "contract_address" => "0x55d398326f99059fF775485246999027B3197955",
            ]);

            if($newwallet)
            {
                try{
                    $image = base64_encode(QrCode::format('png')->size(100)->generate($createWallet['data']->address));
                    $html = '<div class="cryptoPayment">
                                <div class="qrCrypto"><img class="img-fluid qrcode" src="data:image/png;base64,'. $image .'" alt="'.$request->coin.' Wallet"/></div>
                                <div class="walletCrypto"><p class="crypto_address">'.$createWallet['data']->address.'</p></div>
                                <div class="wallet_message text-center">
                                    <p>
                                        Important: This Crypto Address is Temporary
                                    </p>
                                    <p>
                                        Please be aware that we will delete this address after 1 hour. Do not use this address after the specified time period.
                                    </p>
                                </div>
                            <div class="deposit_check"><button class="check_trx" onclick="check_trx()">Check Transaction</button></div>
                            </div>';

                    return $html;
                }catch (\Exception $e) {
                    $html = '<div<p class="crypto_error">'.$e->getMessage().'</p></div>';
                    return $html;
                }
            }
        }

        $html = '<div<p class="crypto_error">SomeThing is Wrong. Please Wait And Try Again or Contact Admin.</p></div>';
        return $html;
    }

    public function payment(Request $request)
    {

        $request->validate([
            'pay_address' => 'required|string|max:255',
            'transaction_hash' => 'required|string|max:255',
        ]);

        $user_id = auth()->user()->id;

        $checktrx = Deposit::where('trx_id', $request->transaction_hash)->first();
        $checkaddress = CryptoWallet::where(['address' => $request->pay_address, 'status' => 0, "status" => 2])->first();

        if(!empty($checktrx) || !empty($checkaddress))
        {
            return response()->json(['message' => 'Please Check Address and Transaction Hash'], 400);
        }else{

            $hash = $this->tokenApi->getTransactionData(['transaction_hash' => $request->transaction_hash]);

            if($hash['success'] == true)
            {
                $data = $hash['data'];
                if($data->hash->status == true){
                    $to = "";
                    $amount = 0;
                    if($data->recipient){
                        $to = $data->recipient->to;
                        $amount = $data->recipient->amount;
                        $contract = $data->hash->to;
                    }else{
                        $to = $data->hash->to;
                        $amount = $data->token_balance;
                        $contract = NULL;
                    }


                    if($checkaddress->address == $to)
                    {
                        $perDollarCoin = setting()->coin_buy_rate;
                        $convertUSD = ($amount * 1);
                        $totaltoken = ($convertUSD * $perDollarCoin);

                        $deposit = Deposit::create([
                            'order_id' => mt_rand(10000000, 99999999),
                            'user_id' => $user_id,
                            'crypto_coin' => $checkaddress->coin,
                            'coin_amount' => $amount,
                            'amount' => $totaltoken,
                            'payment_address' => $to,
                            'trx_id' => $request->transaction_hash,
                            'payment_type' => 'crypto_payment',
                            'payment_history' => json_encode([
                                "sender_address" => $data->hash->from,
                                "receiver_address" => $request->pay_address,
                                "coin_name" => $checkaddress->coin,
                                "coin_contract_address" => $contract,
                                "coin_to_usd" => $convertUSD,
                            ]),
                            'status' => 1
                        ]);

                        if($deposit)
                        {
                            User::where("id", $user_id)->update([
                                'mining_amount' => (auth()->user()->mining_amount + $totaltoken)
                            ]);

                            Balance::create([
                                "user_id" => $user_id,
                                'amount' => $totaltoken,
                                'balance_type' => "mining_amount"
                            ]);
                            BuyCoin::create([
                                "user_id" => $user_id,
                                'wallet' =>$to,
                                'amount' => $totaltoken,
                                'pay' => $amount,
                                'transaction_id' => $request->transaction_hash,
                            ]);
                            $checkaddress->status = 1;
                            $checkaddress->save();

                            // here this logic


                            $firstGenerationUser = ReferUser::where('auth_id', $user_id)->first();
                            if ($firstGenerationUser) {
                                $firstGenPresaleCommission = $totaltoken * 18 / 100;
                                $userGenOne = User::where('id', $firstGenerationUser->refer_id)->first();
                                $userGenOne->increment('first_gen_buy_presale', $totaltoken);
                                $userGenOne->increment('first_gen_commission_amount', $firstGenPresaleCommission);
                                $userGenOne->increment('mining_bonus_amount', $firstGenPresaleCommission);

                                $secondGenerationUser = ReferUser::where('auth_id', $firstGenerationUser->refer_id)->first();
                                if ($secondGenerationUser) {
                                    $secondGenPresaleCommission = $totaltoken * 4 / 100;
                                    $userGenTwo = User::where('id', $secondGenerationUser->refer_id)->first();
                                    $userGenTwo->increment('second_gen_buy_presale', $totaltoken);
                                    $userGenTwo->increment('second_gen_commission_amount', $secondGenPresaleCommission);
                                    $userGenTwo->increment('mining_bonus_amount', $secondGenPresaleCommission);

                                    $thirdGenerationUser = ReferUser::where('auth_id', $secondGenerationUser->refer_id)->first();
                                    if ($thirdGenerationUser) {
                                        $thirdGenPresaleCommission = $totaltoken * 3 / 100;
                                        $userGenThree = User::where('id', $thirdGenerationUser->refer_id)->first();
                                        $userGenThree->increment('third_gen_buy_presale', $totaltoken);
                                        $userGenThree->increment('third_gen_commission_amount', $thirdGenPresaleCommission);
                                        $userGenThree->increment('mining_bonus_amount', $thirdGenPresaleCommission);
                                    }
                                }
                            }


                            return redirect()->route('user.coin.buy.history', ['success' => 'Request Submited Successfully']);
                        }
                    }else{
                        return response()->json(['message' => 'Please Check Address and Transaction Hash'], 400);
                    }
                }
            }else{
                return response()->json(['message' => 'Transaction Checking Failed. Please Check Transaction History In Bscscan'], 400);
            }
        }
        return response()->json(['message' => 'Something Error. Try Again'], 400);
    }

    public function withdraw(Request $request)
    {
        $request->validate([
            'address' => 'required | string | max:255',
            'amount' => 'required | numeric | min:1'
        ]);
        $availableBalance = auth()->user()->mining_bonus_amount;

        if ($request->amount > $availableBalance) {
            return back()->with('balanceError', 'You don t have enogh balance.');
        }

        $perDollarCoin = setting()->coin_buy_rate;
        $convertUSD = (1 / $perDollarCoin);
        $usd = ( $request->amount * $convertUSD);


        $data = [
            "amount_value" => $usd,
            'from_address' => setting()->wallet_address,
            "to_address" => $request->address,
            "contracts" => setting()->wallet_pk,
            'contract_address' => "0x55d398326f99059fF775485246999027B3197955",
        ];

        $withdraw = $this->tokenApi->sendCustomToken($data);

        if($withdraw['success'] == true){
            $data = $withdraw['data'];
            if($data->tx->status == true){
                SellCoin::insert([
                    'user_id' => auth()->user()->id,
                    'wallet_address' => $request->address,
                    "withdraw_coin_name" => "USDT",
                    "usd_amount" => $usd,
                    "trx_id" => $data->hash,
                    'amount' => $request->amount,
                    'payment_type' => 'crypto_payment',
                    'payment_history' => json_encode([
                        "sender_address" => $data->tx->from,
                        "receiver_address" => $request->address,
                        "coin_name" => "USDT",
                        "coin_contract_address" => $data->tx->to,
                        "coin_to_usd" => $usd,
                    ]),
                    'status' => 1,
                ]);
                $user = User::where('id', auth()->user()->id)->first();
                $decrementCoin = $request->amount;
                $user->decrement('mining_bonus_amount', $decrementCoin);
                return back()->with('success', 'Your coin sell successfully');
            }
        }

        return back()->with('error', 'Something is Wrong. Try Again. Or Contact Admin.');

    }

}


