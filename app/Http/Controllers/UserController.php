<?php

namespace App\Http\Controllers;

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
        return view('users.edit');
    }

    public function update()
    {
        
    }
}
