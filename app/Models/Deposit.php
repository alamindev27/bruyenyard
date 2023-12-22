<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'user_id', 'crypto_coin', 'coin_amount', 'amount', 'payment_address', 'trx_id', 'payment_type', 'payment_history', 'status'
    ];

    public function depositWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
