<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');

    if (Auth::attempt(['username' => $username, 'password' => $password])) {
        // The credentials are valid and the user is now logged in...
    } else {
        // The credentials are invalid...
    }
}

}
