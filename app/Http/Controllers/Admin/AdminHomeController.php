<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CryptoWallet;
use App\Models\Deposit;
use App\Models\Partner;
use App\Models\SellCoin;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
        $activeUserCount = User::where([['role', 'user'], ['status', 'unblocked']])->count();
        $deactiveUserCount = User::where([['role', 'user'], ['status', 'blocked']])->count();
        $totalTeamMember = Team::count();
        $totalPartner = Partner::count();
        $sellCoinRequest = SellCoin::where('status','pending')->count();
        $buyCoinRequest = Deposit::where('status', 0)->count();
        $totalBuyCoin = Deposit::where('status', 1)->sum('amount');
        $totalSellCoin = SellCoin::where('status','success')->sum('amount');
        return view('admin.index', compact('activeUserCount', 'deactiveUserCount', 'totalTeamMember', 'totalPartner', 'sellCoinRequest', 'buyCoinRequest', 'totalBuyCoin', 'totalSellCoin'));
    }

    public function userList() {
        $users = User::where('role', 'user')->orderBy('id', 'DESC')->get();
        return view('admin.user-list', compact('users'));
    }

    public function blockUser($id) {
        $user = User::where('id', $id)->first();
        if ($user->status == 'blocked'){
            $user->update([
                'status' => 'unblocked'
            ]);
        }else{
            $user->update([
                'status' => 'blocked'
            ]);
        }
        return back()->with('success', 'Updated Successfully');
    }

    public function deleteUser($id) {
        $user = User::where('id', $id)->first();
        $arr = explode('/', $user->avatar);
        $img = end($arr);
        if ($img != 'avatar.png') {
            unlink(base_path($user->avatar));
        }
        $user->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    public function cryptoWallets() {
        $datas = CryptoWallet::with('cryptoWalletWithUserRealtion')->orderBy('created_at', 'DESC')->get();
        return view('admin.crypto-walltes', compact('datas'));
    }
}
