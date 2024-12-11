<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    protected $fillable = [
        'title','author','publisher', 'release_year',
    ];
}

