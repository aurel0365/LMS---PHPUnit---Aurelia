<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Koran;

class KoranSeeder extends Seeder
{
    public function run()
    {
        Koran::create([
            'title' => 'The Daily News',
            'publish_date' => '2024-12-01',
            'editor' => 'John Smith',
        ]);

        Koran::create([
            'title' => 'The Global Times',
            'publish_date' => '2024-12-02',
            'editor' => 'Jane Doe',
        ]);

        Koran::create([
            'title' => 'Tech Today',
            'publish_date' => '2024-12-03',
            'editor' => 'Alex Johnson',
        ]);

        Koran::create([
            'title' => 'The Morning Herald',
            'publish_date' => '2024-12-04',
            'editor' => 'Chris Lee',
        ]);

        Koran::create([
            'title' => 'The Business Journal',
            'publish_date' => '2024-12-05',
            'editor' => 'David Clark',
        ]);
    }
}
