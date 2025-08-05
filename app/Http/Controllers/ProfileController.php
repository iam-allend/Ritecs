<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('profile.dashboard', 
        ['title' => 'Dashboard']);
    }

    public function member()
    {
        return view('profile.member', 
        ['title' => 'Membership']);
    }

    public function settings()
    {
        return view('profile.settings', 
        ['title' => 'Settings']);
    }
}
