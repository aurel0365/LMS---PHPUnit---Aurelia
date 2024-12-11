<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Journal;

class JournalSeeder extends Seeder
{
    public function run()
    {
        Journal::create([
            'title' => 'The Journal of Technology in Society',
            'author' => 'John Doe',
            'publisher' => 'Tech Publishing',
            'publication_year' => 2021,
        ]);

        Journal::create([
            'title' => 'Artificial Intelligence Review',
            'author' => 'Jane Smith',
            'publisher' => 'AI Journal Publishers',
            'publication_year' => 2020,
        ]);

        Journal::create([
            'title' => 'International Journal of Computer Science',
            'author' => 'Alan Turing',
            'publisher' => 'CS Publishers',
            'publication_year' => 2022,
        ]);

        Journal::create([
            'title' => 'Journal of Data Science',
            'author' => 'Marie Curie',
            'publisher' => 'Science Press',
            'publication_year' => 2023,
        ]);

        Journal::create([
            'title' => 'The Journal of Software Engineering',
            'author' => 'Charles Babbage',
            'publisher' => 'SE Journal Publishing',
            'publication_year' => 2019,
        ]);
    }
}
