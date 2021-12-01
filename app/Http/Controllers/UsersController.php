<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function logins(Request $request)
    {
        // return User::select('select * from `users` where (`email` = test@test.com)');

        $users = Users::where(['email' => $request->email])->first();
        // return $users->password;
        if (!$users || !Hash::check($request->input('password') , $users->password)) {

            return " UserName or passWord is not matched";
        } else {
            $request->session()->put('users', $users);
            return redirect('/');
        }

        //return $request->input();

    }
}
