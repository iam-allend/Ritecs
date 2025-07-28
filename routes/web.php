<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/buku', [PageController::class, 'buku'])->name('buku');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/detail-buku', [PageController::class, 'detailBuku'])->name('detail-buku');
Route::get('/petunjuk-penulis', [PageController::class, 'petunjukPenulis'])->name('petunjuk-penulis');


// Route contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
