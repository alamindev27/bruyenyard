<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_name',
        'site_name',
        'site_logo',
        'site_favicon',
        'coin_buy_rate',
        'wallet_address',
        'wallet_pk',
        'take_sale_count',
        'take_sale_count_status',
    ];
}
