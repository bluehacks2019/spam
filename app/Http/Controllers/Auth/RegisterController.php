<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
        DB::table('entries')->insert([
            ['name' => 'Trip to San Francisco', 'favorited' => 0, 'user_id' => $user->id, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ]);
        
        $entry = DB::table('entries')->where('user_id', $user->id)->latest()->first();

        $a1 = DB::table('activities')->where('genre', 'physical')->inRandomOrder()->limit(2);
        $a2 = DB::table('activities')->where('genre', 'social')->inRandomOrder()->limit(2);
        $a3 = DB::table('activities')->where('genre', 'intellectual')->inRandomOrder()->limit(2);
        $activities = DB::table('activities')->where('genre', 'emotional')->inRandomOrder()->limit(2)->union($a1)->union($a2)->union($a3)->get();
        
        foreach($activities as $a){
            DB::table('activity_entry')->insert([
                'activity_id' => $a->id,
                'entry_id' => $entry->id,
                'user_id' => $user->id,
                'finished' => false,
            ]);
        }

        return $user;
    }
}
