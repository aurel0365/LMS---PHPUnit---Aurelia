<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'publisher' => 'Charles Scribner\'s Sons',
            'publication_year' => 1925,
            'genre' => 'Fiction',
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'publisher' => 'J.B. Lippincott & Co.',
            'publication_year' => 1960,
            'genre' => 'Fiction',
        ]);

        Book::create([
            'title' => '1984',
            'author' => 'George Orwell',
            'publisher' => 'Secker & Warburg',
            'publication_year' => 1949,
            'genre' => 'Dystopian',
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'publisher' => 'T. Egerton',
            'publication_year' => 1813,
            'genre' => 'Romance',
        ]);

        Book::create([
            'title' => 'Moby Dick',
            'author' => 'Herman Melville',
            'publisher' => 'Harper & Brothers',
            'publication_year' => 1851,
            'genre' => 'Adventure',
        ]);
    }
}
