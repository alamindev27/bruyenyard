<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\MiningSummary;
use App\Models\ReferUser;
use App\Models\Reward;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserHomeController extends Controller
{
    public function index() {
        $dailyReward = Reward::where('user_id', auth()->user()->id)
                    ->whereDate('created_at', Carbon::toDay())
                    ->sum('amount');
        $totalReward = Reward::where('user_id', auth()->user()->id)->sum('amount');
        return view('user.index', compact('dailyReward', 'totalReward'));
    }

    public function account() {
        return view('user.account');
    }

    public function personalInfo() {
        return view('user.personal-info');
    }

    public function personalInfoUpdate(Request $request) {
        $user = User::where('id', auth()->user()->id)->first();
        $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | email | unique:users,email,'.$user->id.',id',
            'phone' => 'required',
            'avatar' => 'image | mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('avatar')) {
            $arr = explode('/', auth()->user()->avatar);
            $img = end($arr);
            if ($img != 'avatar.png') {
                unlink(base_path(auth()->user()->avatar));
            }
            $file = $request->file('avatar');
            $fileName = time().'-profile-image.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/avatar/';
            $request->avatar->move($path, $fileName);
            $user->update([
                'avatar' => $path.$fileName
            ]);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function miningHistory() {
        $histories = MiningSummary::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('user.mining-history', compact('histories'));
    }

    public function miningReward() {
        $histories = Reward::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();
        return view('user.mining-reward', compact('histories'));
    }

    public function changePassword() {
        return view('user.change-password');
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        if (Hash::check($request->current_password, $user->password)) {
            User::where('id', auth()->id())->update([
                'password' => Hash::make($request->password)
            ]);
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('notMatch', 'Current password not match');
        }
    }

    public function inviteHistory() {
        $referUsers = ReferUser::with('referUserWtihUserRelation')->where('refer_id', auth()->user()->id)->get();
        return view('user.invite-history', compact('referUsers'));
    }
}
