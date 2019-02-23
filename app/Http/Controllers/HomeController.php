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
        ->get();

        return view('home', compact('activities'));
    }

    public function addActivities(Request $request)
    {
        DB::table('activity_entry')->where('entry_id', 1)
        ->update(['finished' => false]);
        
        foreach($request->box as $b=>$k){
            DB::table('activity_entry')
            ->where('activity_id', $k)
            ->update(['finished' => true]);
        }
        
        return redirect()->route('home');
    }
}
