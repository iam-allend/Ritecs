<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Import model Contact

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact', ['title' => 'Contact']); // Sesuaikan dengan nama file blade Anda

    }
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Simpan data ke database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // 3. Redirect kembali dengan pesan sukses
        return redirect()->route('contact')->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}