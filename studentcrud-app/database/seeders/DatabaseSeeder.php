<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



         // \App\Models\User::factory(10)->create();
 
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
 
 
        $now = Carbon::now();
 
        $faker = Faker::create();
 
        $people = array();
 
        for ($i = 0; $i < 200; $i++) {
            $people[] = [
                'name' => $faker->firstName,
                'address' => $faker->lastName,
                'mobile' => $faker->phoneNumber,
            ];
        }
        echo($people);
        DB::table('students')->insert($people);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
