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
        $entry_id = DB::table('entries')->where('user_id', Auth::user()->id)->latest()->first()->id;
        $activities = DB::table('activity_entry')->where('entry_id', $entry_id)
        ->join('activities','activity_entry.activity_id', '=', 'activities.id')
        ->get()->toArray();

        return view('home', compact('activities'));
    }

    public function addActivities(Request $request)
    {
        $entry_id = DB::table('entries')->where('user_id', Auth::user()->id)->latest()->first()->id;
        DB::table('activity_entry')->where('entry_id', $entry_id)
        ->update(['finished' => false]);

        if($request->box){
             foreach($request->box as $b=>$k){
                 DB::table('activity_entry')
                 ->where('activity_id', $k)
                 ->update(['finished' => true]);
             }
        }

        $entry_id = DB::table('entries')->where('user_id', Auth::user()->id)->latest()->first()->id;
        $activities = DB::table('activity_entry')->where('entry_id', $entry_id)
        ->join('activities','activity_entry.activity_id', '=', 'activities.id')
        ->get()->toArray();

        return view('home', compact('activities'));
    }
    public function progress()
    {
        $entry_id = DB::table('entries')->where('user_id', Auth::user()->id)->latest()->first()->id;
        $activitiesDone = DB::table('activity_entry')->where('entry_id', $entry_id)->where('finished', true)->count();
        $entries = DB::table('entries')->where('id', $entry_id)->get();
        $dayStreak = 0;
        
        return view('progress', compact('activitiesDone', 'dayStreak'));
    }
    public function history()
    {
        $entries = DB::table('entries')->where('user_id', Auth::user()->id)->latest()->limit(16)
        ->get()->toArray();

        return view('history', compact('entries'));
    }
    
}
