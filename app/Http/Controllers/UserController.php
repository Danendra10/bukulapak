<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login(Request $request)
    {
        // return User::select('select * from `users` where (`email` = test@test.com)');

        //return User::where(['email' => $request->email])->first();

        //return $request->input();

    }
}
