<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;use App\Models\Cd;

class CdSeeder extends Seeder
{
    public function run()
    {
        Cd::create([
            'title' => 'Beethoven Symphony No. 5',
            'author' => 'Ludwig van Beethoven',
            'publisher' => 'Classical Music Records',
            'release_year' => 1808,
        ]);

        Cd::create([
            'title' => 'Abbey Road',
            'author' => 'The Beatles',
            'publisher' => 'Apple Records',
            'release_year' => 1969,
        ]);

        Cd::create([
            'title' => 'Thriller',
            'author' => 'Michael Jackson',
            'publisher' => 'Epic Records',
            'release_year' => 1982,
        ]);

        Cd::create([
            'title' => 'The Dark Side of the Moon',
            'author' => 'Pink Floyd',
            'publisher' => 'Harvest Records',
            'release_year' => 1973,
        ]);

        Cd::create([
            'title' => 'Back in Black',
            'author' => 'AC/DC',
            'publisher' => 'Atlantic Records',
            'release_year' => 1980,
        ]);
    }
}
