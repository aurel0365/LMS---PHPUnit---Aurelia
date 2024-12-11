<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Koran extends Model
{
    protected $fillable = [
        'title', 'publish_date', 'editor',
    ];
}
