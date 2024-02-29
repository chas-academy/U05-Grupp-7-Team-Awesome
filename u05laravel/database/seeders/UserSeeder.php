<?php

namespace Database\Seeders;

use App\Models\MyList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// Mike
// Detta är en seeder för att lägga in lite Users in i databasen. Som ni ser så har Mike role 1 och detta gör att 
// Jag blir Admin

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {




        $mike = DB::table('users')->insert([
            'name' => 'Mike',
            'email' => 'Mike@hotmail.com',
            'password' => Hash::make('Mike'),
            'role' => 1,
        ]);
        MyList::create([
            'list_name' => "Mike's list",
            'user_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Abdi',
            'email' => 'Abdi@hotmail.com',
            'password' => Hash::make('Abdi'),
            'role' => 0,
        ]);
        MyList::create([
            'list_name' => "Abdi's list",
            'user_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Lolo',
            'email' => 'Lolo@hotmail.com',
            'password' => Hash::make('Lolo'),
            'role' => 0,
        ]);
        MyList::create([
            'list_name' => "Lolo's list",
            'user_id' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Cissi',
            'email' => 'Cissi@hotmail.com',
            'password' => Hash::make('Cissi'),
            'role' => 0,
        ]);
        MyList::create([
            'list_name' => "Cissi's list",
            'user_id' => 4,
        ]);

        DB::table('users')->insert([
            'name' => 'Daniel',
            'email' => 'Daniel@hotmail.com',
            'password' => Hash::make('Daniel'),
            'role' => 0,
        ]);
        MyList::create([
            'list_name' => "Daniel's list",
            'user_id' => 5,
        ]);
    }
}
