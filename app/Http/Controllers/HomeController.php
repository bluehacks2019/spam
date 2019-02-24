<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activities = DB::table('activity_entry')->where('entry_id', 1)
        ->join('activities','activity_entry.activity_id', '=', 'activities.id')
        ->get()->toArray();

        return view('home', compact('activities'));
    }

    public function addActivities(Request $request)
    {
        DB::table('activity_entry')->where('entry_id', 1)
        ->update(['finished' => false]);

        if($request->box){
             foreach($request->box as $b=>$k){
                 DB::table('activity_entry')
                 ->where('activity_id', $k)
                 ->update(['finished' => true]);
             }
        }

        $activities = DB::table('activity_entry')->where('entry_id', 1)
        ->join('activities','activity_entry.activity_id', '=', 'activities.id')
        ->get()->toArray();

        return view('home', compact('activities'));
    }
    public function progress()
    {
        $activitiesDone = DB::table('activity_entry')->where('finished', true)->count();
        $entries = DB::table('entries')->where('id', 1)->get();
        $dayStreak = 0;
        
        return view('progress', compact('activitiesDone', 'dayStreak'));
    }
    public function history()
    {
        $entries = DB::table('entries')->latest()->limit(16)
        ->get()->toArray();

        return view('history', compact('entries'));
    }
    
}
