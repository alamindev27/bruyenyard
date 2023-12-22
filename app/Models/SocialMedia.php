<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'fb_link',
        'msg_link',
        'wa_link',
        'li_link',
        'tw_link',
        'in_link',
        'github_link',
        'tel_link',
    ];
}
