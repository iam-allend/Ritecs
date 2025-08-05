<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('profile.dashboard');
    }

    public function member()
    {
        return view('profile.member');
    }

    public function settings()
    {
        return view('profile.settings');
    }
}
