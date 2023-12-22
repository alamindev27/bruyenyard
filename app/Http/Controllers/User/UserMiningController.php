<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MiningSummary;
use App\Models\Reward;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserMiningController extends Controller
{
    public function index(){
        $user = User::where('id', auth()->user()->id)->first();
        $newDateTime = Carbon::now()->addHours(24);


       $user->update([
            'free' => 'paid',
            'count' => $newDateTime
       ]);
       $user->increment('mining_amount', 500);
       MiningSummary::insert([
            'user_id' => auth()->user()->id,
            'amount' => 500,
            'mining_type' => 'Free Mining',
            'created_at' => Carbon::now()
       ]);
       return back();
    }
    public function claimBonus() {
        $user = User::where('id', auth()->user()->id)->first();
        $date = Carbon::now();
        $bonus = $user->mining_amount*0.10/100;
        $user->increment('mining_bonus_amount', $bonus);
        $user->update([
            'count' => $date->addDay(1)
        ]);
        Reward::insert([
            'user_id' => auth()->user()->id,
            'amount' => $bonus,
            'created_at' => Carbon::now()
        ]);
       return back();
    }

    public function restaking() {
        $user = User::where('id', auth()->user()->id)->first();
        $user->increment('mining_amount', $user->mining_bonus_amount);
        $user->update([
            'mining_bonus_amount' => 0
        ]);
        MiningSummary::insert([
            'user_id' => auth()->user()->id,
            'amount' => $user->mining_bonus_amount,
            'mining_type' => 'New Mining',
            'created_at' => Carbon::now()
       ]);

        return back();
    }
}
