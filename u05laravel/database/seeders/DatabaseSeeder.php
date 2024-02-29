<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MovieSeeder::class,
            UserSeeder::class,
            CommentsTableSeeder::class,
        ]);
    }
}

// I denna kan man ropa på Seederfilerna som har skapats och detta gör att alla de körs sammtidigt