<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('users')->insert([
            'name' => 'Mike',
            'email' => 'Mike@hotmail.com',
            'password' => Hash::make('Mike'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Abdi',
            'email' => 'Abdi@hotmail.com',
            'password' => Hash::make('Abdi'),
            'role' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'Lolo',
            'email' => 'Lolo@hotmail.com',
            'password' => Hash::make('Lolo'),
            'role' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'Cissi',
            'email' => 'Cissi@hotmail.com',
            'password' => Hash::make('Cissi'),
            'role' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'Daniel',
            'email' => 'Daniel@hotmail.com',
            'password' => Hash::make('Daniel'),
            'role' => 0,
        ]);
    }
}
