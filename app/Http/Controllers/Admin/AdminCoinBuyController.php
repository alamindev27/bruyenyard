<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuyCoin;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCoinBuyController extends Controller
{
    public function index() {
        $datas = Deposit::with('depositWithUserRelation')->orderBy('id', 'DESC')->get();
        $name = 'Coin Buy List';
        return view('admin.coin.index', compact('datas', 'name'));
    }
    // public function success() {
    //     $datas = BuyCoin::with('coinWithUserRelation', 'coinWithWalletRelation')->where('status', 'success')->orderBy('id', 'DESC')->get();
    //     $name = 'Success Request List';
    //     return view('admin.coin.pending', compact('datas', 'name'));
    // }
    // public function failed() {
    //     $datas = BuyCoin::with('coinWithUserRelation', 'coinWithWalletRelation')->where('status', 'failed')->orderBy('id', 'DESC')->get();
    //     $name = 'Failed Request List';
    //     return view('admin.coin.pending', compact('datas', 'name'));
    // }

    public function approved($id) {
        $coin = BuyCoin::where('id', $id)->first();
        $coin->update([
            'status' => 'success'
        ]);
        $user = User::where('id', $coin->user_id)->first();
        $user->increment('mining_amount', $coin->amount);
        return back()->with('success', 'Updated Succesfully');
    }

    public function delete($id){
        $coin = BuyCoin::where('id', $id)->first();
        $coin->delete();
        return back()->with('success', 'Deleted Successfully');

    }
}
