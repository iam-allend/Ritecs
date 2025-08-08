<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ProfileController;

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
Route::get('/ircs-journal', [PageController::class, 'ircsJournal'])->name('ircs-journal');
Route::get('/membership', [PageController::class, 'membership'])->name('membership');

Route::get('/jurnal', [PageController::class, 'jurnal'])->name('jurnal');
Route::get('/journal', [PageController::class, 'journal'])->name('journal');
Route::get('/detail-jurnal', [PageController::class, 'detailjurnal'])->name('detail-jurnal');

// Route contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::prefix('')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('profile.dashboard');
    Route::get('/member', [ProfileController::class, 'member'])->name('profile.member');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('profile.settings');
});






















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