<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'amount',
        'balance_type',
    ];

    public function balanceWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
