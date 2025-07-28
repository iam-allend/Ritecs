<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatbotController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/buku', [PageController::class, 'buku'])->name('buku');
Route::get('/service', [PageController::class, 'service'])->name('service');
// routes/web.php


// Route contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// chatbot routes

Route::get('/chatbot', [ChatbotController::class, 'showChat'])->name('chatbot.show');
Route::post('/chatbot/send', [ChatbotController::class, 'sendMessage'])->name('chatbot.send');
use Gemini\Laravel\Facades\Gemini; // <-- Pastikan ini ada di atas file

Route::get('/test-gemini', function () {
    try {
        // Kita hanya perlu memanggil metode sederhana untuk tes,
        // tidak perlu mengirim chat. Ini untuk membuktikan class-nya bisa dimuat.
        $result = Gemini::models()->list(); 

        return '✅ SUKSES: Paket Gemini berhasil dimuat oleh Laravel!';

    } catch (\Throwable $e) {
        // Jika terjadi error, kita akan menampilkannya langsung di browser.
        // Ini akan memberikan pesan error yang lebih jelas.
        return '❌ GAGAL: Terjadi error. Pesan: <pre>' . $e->getMessage() . '</pre>';
    }
});