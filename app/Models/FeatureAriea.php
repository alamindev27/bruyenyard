<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\TLD;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureAriea extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'text',
        'icon',
    ];
}
