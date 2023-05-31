<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function auth(Request $request)
    {
        $request->session()->put('login', 'active');
        return redirect('/contacts');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
