<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresaleRaise extends Model
{
    use HasFactory;
    protected $fillable = [
        'token_allocation',
        'allocation_percentage',
        'allocation_amount',
        'token',
        'discount_price',
        'USD_value',
    ];
}
