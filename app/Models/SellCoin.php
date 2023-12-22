<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellCoin extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];

    public function sellCoinWithUserRelation() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
