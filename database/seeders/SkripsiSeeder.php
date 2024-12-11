<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skripsi;

class SkripsiSeeder extends Seeder
{
    public function run()
    {
        Skripsi::create([
            'title' => 'Optimization of Machine Learning Algorithms',
            'mahasiswa' => 'Alex Johnson',
            'NIM' => 12345678,
            'supervisor' => 'Dr. Sarah Lee',
            'submission_year' => 2021,
        ]);

        Skripsi::create([
            'title' => 'Artificial Intelligence in Healthcare',
            'mahasiswa' => 'Emma Williams',
            'NIM' => 23456789,
            'supervisor' => 'Prof. Mark Brown',
            'submission_year' => 2022,
        ]);

        Skripsi::create([
            'title' => 'Data Privacy in the Digital Age',
            'mahasiswa' => 'Michael Turner',
            'NIM' => 34567890,
            'supervisor' => 'Dr. Elizabeth Green',
            'submission_year' => 2023,
        ]);

        Skripsi::create([
            'title' => 'Blockchain Technology and its Applications',
            'mahasiswa' => 'Sophia Clark',
            'NIM' => 45678901,
            'supervisor' => 'Prof. David White',
            'submission_year' => 2020,
        ]);

        Skripsi::create([
            'title' => 'Cybersecurity Threats and Prevention',
            'mahasiswa' => 'Lucas Davis',
            'NIM' => 56789012,
            'supervisor' => 'Dr. Natalie Adams',
            'submission_year' => 2021,
        ]);
    }
}
