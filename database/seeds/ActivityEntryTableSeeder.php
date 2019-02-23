<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityEntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a1 = DB::table('activities')->where('genre', 'physical')->inRandomOrder()->limit(2);
        $a2 = DB::table('activities')->where('genre', 'social')->inRandomOrder()->limit(2);
        $a3 = DB::table('activities')->where('genre', 'intellectual')->inRandomOrder()->limit(2);
        $activities = DB::table('activities')->where('genre', 'emotional')->inRandomOrder()->limit(2)->union($a1)->union($a2)->union($a3)->get();
        
        foreach($activities as $a){
            DB::table('activity_entry')->insert([
                'activity_id' => $a->id,
                'entry_id' => 1,
                'user_id' => 1,
                'finished' => false,
            ]);
        }

    }
}
