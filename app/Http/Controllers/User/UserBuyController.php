<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BuyCoin;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;


class UserBuyController extends Controller
{
    public function index() {
        $datas = Wallet::all();
        return view('user.buy-coin', compact('datas'));
    }

    public function buy(Request $request) {
        $request->validate([
            'wallet' => 'required | string | max:255',
            'amount' => 'required | numeric',
            'pay' => 'required',
            'transaction_id' => 'required'
        ]);
        BuyCoin::insert([
            'user_id' => auth()->user()->id,
            'wallet_id' => $request->wallet,
            'amount' => $request->amount,
            'pay' => $request->pay,
            'transaction_id' => $request->transaction_id,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Request Submited Successfully');
    }

    public function getAddress(Request $request) {
        $request->validate([
            'netwark_id' => 'required'
        ]);
        $netwark = Wallet::where('id', $request->netwark_id)->first();
        return response()->json($netwark->address);
    }
    public function history()  {
        $datas = BuyCoin::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('user.buy-history', compact('datas'));
    }
}
