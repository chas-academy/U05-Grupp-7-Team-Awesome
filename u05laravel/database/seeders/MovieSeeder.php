<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'titel' => 'The Ring',
            'genre' => 'Horror',
            'country' => 'Japan',
            'year' => '1998',
            'director' => 'Hideo Nakata',
        ]);
        DB::table('movies')->insert([
            'titel' => 'The Audition',
            'genre' => 'Horror',
            'country' => 'Japan',
            'year' => '1999',
            'director' => 'Takashi Miike',
        ]);
        DB::table('movies')->insert([
            'titel' => 'One cut of the dead',
            'genre' => 'Horror',
            'country' => 'Japan',
            'year' => '2017',
            'director' => 'Shinichiro Ueda',
        ]);
        DB::table('movies')->insert([
            'titel' => 'AEon Flux',
            'genre' => 'Sci-fi',
            'country' => 'USA',
            'year' => '2005',
            'director' => 'Karyn Kusama',
        ]);
        DB::table('movies')->insert([
            'titel' => 'Interstellar',
            'genre' => 'Sci-fi',
            'country' => 'USA',
            'year' => '2014',
            'director' => 'Christopher Nolan',
        ]);
        DB::table('movies')->insert([
            'titel' => 'The Matrix',
            'genre' => 'Sci-fi',
            'country' => 'USA',
            'year' => '1999',
            'director' => 'Lana Wachowski',
        ]);
    }
}
