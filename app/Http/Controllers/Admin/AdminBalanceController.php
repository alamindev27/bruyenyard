<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminBalanceController extends Controller
{
    public function index() {
        $balances = Balance::with('balanceWithUserRelation')->orderBy('id', 'DESC')->get();
        return view('admin.balance.index', compact('balances'));
    }

    public function add(Request $request) {
        $request->validate([
            'amount' => 'required | numeric | min:1',
            'user_id' => 'required'
        ]);
        $id = $request->user_id;
        $user = User::where('id', $id)->first();
        Balance::Insert([
            'user_id' => $id,
            'amount' => $request->amount,
            'balance_type' => 'Add Balance',
            'created_at' => Carbon::now()
        ]);
        $user->increment('mining_amount', $request->amount);
        return back()->with('success', 'Added Successfully');
    }

    public function remove(Request $request) {
        $request->validate([
            'amount' => 'required | numeric | min:1',
            'user_id' => 'required'
        ]);
        $id = $request->user_id;
        Balance::Insert([
            'user_id' => $id,
            'amount' => $request->amount,
            'balance_type' => 'Remove Balance',
            'created_at' => Carbon::now()
        ]);
        $user = User::where('id', $id)->first();
        $user->decrement('mining_amount', $request->amount);
        return back()->with('success', 'Removed Successfully');
    }
}
