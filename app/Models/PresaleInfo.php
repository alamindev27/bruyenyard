<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresaleInfo extends Model
{
    use HasFactory;
    protected $fillable =[
        'heading',
        'text',
        'image',
        'pre_sale',
        'bounties',
        'liquidity_pool',
        'team',
        'advisors',
        'marketing_and_bd',
        'pre_seed',
    ];
}
