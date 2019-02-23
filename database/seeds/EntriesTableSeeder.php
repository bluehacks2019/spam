<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Faker\Factory as Faker;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<30; $i++){
            DB::table('entries')->insert([
            'name' => 'untitled',
            'favorited' => false,
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays($i),
            'updated_at' => Carbon::now()->subDays($i),
        ]);
            
        }
    }
}
