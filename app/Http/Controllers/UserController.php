<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function show()
    {
        return view('user.view');
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function update(Request $request)
    {
        $user = DB::table('users')->where('id', $request->id)
            ->update(['goal' => $request->goal]);

            return redirect()->route('users.show');
    }
}
