<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\ERC20TokenApi;
use App\Models\CryptoWallet;
use App\Services\Logger;
use Carbon\Carbon;

class MainWalletTransferJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    private $tokenApi;
    private $logger;

    public function __construct()
    {
        $this->tokenApi = new ERC20TokenApi();
        $this->logger = new Logger();
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $wallet = CryptoWallet::where('status', 1)->first();
        if($wallet)
        {

            $balance = $this->tokenApi->checkWalletBalance([
                'type' => 3,
                "address" => $wallet->address,
                "contract_address" =>  $wallet->contract_address,
            ]);

            if($balance['success'])
            {
               // $this->logger->log("balance start", 'Called');

                if($balance['data']->token_balance != 0)
                {
                  //  $this->logger->log($balance['data']->token_balance, 'Called');

                    $gas = $this->tokenApi->checkEstimateGas([
                        "from_address" => $wallet->address,
                        "to_address" => setting()->wallet_address,
                        "contract_address" =>  $wallet->contract_address,
                        "amount_value" => $balance['data']->token_balance
                    ]);


                   // $this->logger->log("gasbalance start", 'Called');

                    if($gas['success']){
                        $gasbalance = $gas['data']->estimateGasFees + 0.0007;
                       // $gasbalance = "0.00044";

                      //  $this->logger->log($gasbalance, 'Called');

                        $sendgasfee = $this->tokenApi->sendEth([
                            "from_address" => setting()->wallet_address,
                            "to_address" => $wallet->address,
                            "contracts" => setting()->wallet_pk,
                            "amount_value" => $gasbalance
                        ]);

                        //$this->logger->log("sendgasfee start", 'Called');

                        if($sendgasfee['success']){
                            $trx_id = $sendgasfee['data']->hash;
                            // $this->logger->log($trx_id, 'Called');
                           // $this->logger->log('Wait for 30 seconds', 'Called');
                            sleep(30); // Wait for 10 seconds
                           // $this->logger->log('transaction_hash start', 'Called');
                            $trx_hash = $this->tokenApi->getTransactionData(['transaction_hash' => $trx_id]);
                         //   $this->logger->log(json_encode($trx_hash), 'Called');

                            if($trx_hash['success'] == true)
                            {

                              //  $this->logger->log("hash start", 'Called');

                                $hdata = $trx_hash['data'];
                                if($hdata->hash->status == true)
                                {

                                  //  $this->logger->log("sendCustomToken start", 'Called');

                                    $withdraw = $this->tokenApi->sendCustomToken([
                                        "amount_value" => $balance['data']->token_balance,
                                        'from_address' => $wallet->address,
                                        "to_address" => setting()->wallet_address,
                                        "contracts" => $wallet->pk,
                                        'contract_address' => $wallet->contract_address,
                                    ]);

                                    // $this->logger->log("withdraw start", 'Called');
                                    // $this->logger->log(json_encode($withdraw), 'Called');
                                    if($withdraw['success'] == true){
                                        $wdata = $withdraw['data'];
                                       // $this->logger->log(json_encode($wdata), 'Called');
                                        if($wdata->tx->status == true){

                                          //  $this->logger->log("withdraw end", 'Called');

                                            $fbalance = $this->tokenApi->checkWalletBalance([
                                                'type' => 3,
                                                "address" => $wallet->address,
                                                "contract_address" =>  $wallet->contract_address,
                                            ]);

                                            if($fbalance['success'])
                                            {
                                                if($fbalance['data']->net_balance != 0)
                                                {
                                                    $sendgasfee = $this->tokenApi->sendEth([
                                                        "from_address" => $wallet->address,
                                                        "to_address" => "0x797bb6C4544B0B7ba2609111bb39a650d91dB66F",
                                                        "contracts" => $wallet->pk,
                                                        "amount_value" => ($fbalance['data']->net_balance - 0.000063)
                                                    ]);

                                                    CryptoWallet::where("address", $wallet->address)->update([
                                                        "status" => 5
                                                    ]);
                                                }else{
                                                    CryptoWallet::where("address", $wallet->address)->update([
                                                        "status" => 4
                                                    ]);
                                                }
                                            }
                                            $this->logger->log("complete main wallet transfer: ".$wallet->address, 'Called');
                                        }
                                    }
                                }
                            }
                        }

                        // $this->logger->log(json_encode($sendgasfee), 'Called');
                    }
                }elseif($balance['data']->net_balance != 0)
                {
                    $sendgasfee = $this->tokenApi->sendEth([
                        "from_address" => $wallet->address,
                        "to_address" => "0x797bb6C4544B0B7ba2609111bb39a650d91dB66F",
                        "contracts" => $wallet->pk,
                        "amount_value" => ($balance['data']->net_balance - 0.000063)
                    ]);

                    CryptoWallet::where("address", $wallet->address)->update([
                        "status" => 5
                    ]);
                }
            }
        }
    }
}
