<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
$faker = Faker::create();
        for($i =0 ;$i<50;$i++){
            \App\Post::create([
                 'title'=>$faker->sentence,
                'body'=>$faker->text,
            ]);

        }
    }
}
