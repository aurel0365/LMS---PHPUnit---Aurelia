<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'title', 'author', 'publisher', 'publication_year',
    ];
}

