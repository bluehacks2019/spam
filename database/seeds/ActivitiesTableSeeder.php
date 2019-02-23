<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 30) as $i){
            DB::table('activities')->insert([
                'name' => $faker->word,
                'genre' => $faker->randomElement(['physical' ,'social', 'intellectual', 'emotional']),
            ]);
            
        }
    }
}
