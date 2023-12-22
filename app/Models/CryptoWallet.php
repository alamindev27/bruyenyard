<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoWallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'coin', 'address', 'pk', 'status'
    ];

    protected $hidden = [
        'pk',
    ];

    public function cryptoWalletWithUserRealtion() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
