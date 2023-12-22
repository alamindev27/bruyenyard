<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferUser extends Model
{
    use HasFactory;
    public function referUserWtihUserRelation() {
        return $this->hasOne(User::class, 'id', 'auth_id');
    }
}
