<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['title' => 'home']);
    }

    public function about()
    {
        return view('pages.about', ['title' => 'about']);
    }

    public function contact()
    {
        return view('pages.contact', ['title' => 'contact']);
    }

    public function buku()
    {
        return view('pages.buku', ['title' => 'buku']);
    }


}
