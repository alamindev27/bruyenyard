<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SellCoin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserSellCoinController extends Controller
{
    public function index () {
        return view('user.sell-coin');
    }

    public function sell(Request $request) {
        $request->validate([
            'address' => 'required | string | max:255',
            'amount' => 'required | numeric | min:1'
        ]);
        $availableBalance = (auth()->user()->mining_bonus_amount / 500) * setting()->coin_buy_rate;
        if ($request->amount > $availableBalance) {
            return back()->with('balanceError', 'You don t have enogh balance.');
        }
        SellCoin::insert([
            'user_id' => auth()->user()->id,
            'wallet_address' => $request->address,
            'amount' => $request->amount,
            'created_at' => Carbon::now()
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        $decrementCoin = 500 / setting()->coin_buy_rate * $request->amount;
        $user->decrement('mining_bonus_amount', $decrementCoin);
        return back()->with('success', 'Your coin sell successfully');
    }

    public function history() {
        $datas = SellCoin::with('sellCoinWithUserRelation')->where('user_id', auth()->user()->id)->get();
        return view('user.sell-history', compact('datas'));
    }
}
