<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyCoin extends Model
{
    use HasFactory;
    protected $fillable = [
       'user_id', 'wallet', 'amount', 'pay', 'transaction_id', 'status'
    ];
    public function coinWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function coinWithWalletRelation() {
        return $this->hasOne(Wallet::class, 'id', 'wallet_id');
    }
}
