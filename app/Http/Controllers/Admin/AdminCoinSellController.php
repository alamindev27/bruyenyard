<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SellCoin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCoinSellController extends Controller
{
    public function pending() {
        $datas = SellCoin::with('sellCoinWithUserRelation')->where('status', 'pending')->orderBy('created_at', 'DESC')->get();
        return view('admin.coin-sell.pending', compact('datas'));
    }
    public function success() {
        $datas = SellCoin::with('sellCoinWithUserRelation')->where('status', 'success')->orderBy('created_at', 'DESC')->get();
        return view('admin.coin-sell.success', compact('datas'));
    }
    public function failed() {
        $datas = SellCoin::with('sellCoinWithUserRelation')->where('status', 'failed')->orderBy('created_at', 'DESC')->get();
        return view('admin.coin-sell.failed', compact('datas'));
    }

    public function approved($id) {
        $coin = SellCoin::where('id', $id)->first();
        $coin->update([
            'status' => 'success'
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function rejected($id) {
        $coin = SellCoin::where('id', $id)->first();
        $coin->update([
            'status' => 'failed'
        ]);
        $user = User::where('id', $coin->user_id)->first();
        $user->increment('mining_bonus_amount', 500 / setting()->coin_buy_rate * $coin->amount);
        return back()->with('success', 'Updated Successfully');
    }

    public function delete($id) {
        $coin = SellCoin::where('id', $id)->first();
        $coin->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
