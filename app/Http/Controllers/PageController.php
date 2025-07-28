<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['title' => 'Home']);
    }

    public function about()
    {
        return view('pages.about', ['title' => 'About']);
    }

    // public function contact()
    // {
    //     return view('pages.contact', ['title' => 'Contact']);
    // }

    public function buku()
    {

        return view('pages.buku', ['title' => 'Buku']);
    }
    public function service()
    {
        return view('pages.service', ['title' => 'Service']);
    }
    public function detailBuku()
    {
        return view('pages.detail-buku', ['title' => 'Detail Buku']);
    }


}
