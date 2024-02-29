<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

// Mike
// Detta är en seeder för att lägga in lite dummie kommentarer och rating

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        Comment::insert([
            [
                'comment' => 'helt ok rulle!',
                'rating' => 3,
                'movie_id' => 4,
                'user_id' => 1,
            ],
            [
                'comment' => 'denna är bra',
                'rating' => 10,
                'movie_id' => 3,
                'user_id' => 2,
            ],
            [
                'comment' => 'bästa filmen',
                'rating' => 8,
                'movie_id' => 4,
                'user_id' => 4,
            ],
            [
                'comment' => 'Bästa idag <3',
                'rating' => 7,
                'movie_id' => 5,
                'user_id' => 5,
            ],
            [
                'comment' => 'Känns som jag lever på nytt',
                'rating' => 10,
                'movie_id' => 1,
                'user_id' => 1,
            ],
            [
                'comment' => 'bra',
                'rating' => 25,
                'movie_id' => 3,
                'user_id' => 5,
            ],
        ]);
    }
}
