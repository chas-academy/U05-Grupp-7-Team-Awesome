<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        Comment::create([
            'comment' => 'helt ok rulle!',
            'movie_id' => 4,
            'user_id' => 1,
        ]);

        Comment::create([
            'comment' => 'denna är bra',
            'rating' => 10,
            'movie_id' => 3,
            'user_id' => 2,
        ]);

        Comment::create([
            'comment' => 'bästa filmen',
            'rating' => 8,
            'movie_id' => 4,
            'user_id' => 4,
        ]);

        Comment::create([
            'comment' => 'Bästa idag <3',
            'rating' => 7,
            'movie_id' => 5,
            'user_id' => 5,
        ]);

        Comment::create([
            'comment' => 'Känns som jag lever på nytt',
            'rating' => 10,
            'movie_id' => 1,
            'user_id' => 1,
        ]);
    }
}
