<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'avatar',
        'role',
        'status',
        'balance',
        'profile_id',
        'mining_amount',
        'mining_bonus_amount',
        'free',
        'count',
        'invite',
        'first_gen_toaal_invite',
        'second_gen_toaal_invite',
        'third_gen_toaal_invite',
        'first_gen_buy_presale',
        'second_gen_buy_presale',
        'third_gen_buy_presale',
        'first_get_commission_amount',
        'second_get_commission_amount',
        'third_get_commission_amount',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
