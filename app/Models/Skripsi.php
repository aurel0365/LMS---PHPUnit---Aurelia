<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    protected $fillable = [
        'title', 'Mahasiswa', 'NIM', 'supervison', 'submission_year',
    ];
}
