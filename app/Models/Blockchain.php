<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blockchain extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'text',
        'file',
        'image',
    ];
}
