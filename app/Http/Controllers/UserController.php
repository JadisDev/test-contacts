<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function auth()
    {
        return redirect('/contacts');
    }
}
