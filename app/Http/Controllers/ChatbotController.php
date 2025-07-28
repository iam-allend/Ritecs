<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini; 

class ChatbotController extends Controller
{
    /**
     * Menampilkan halaman view untuk chatbot.
     */
    public function showChat()
    {
        return view('AI.chatbot');
    }

    /**
     * Menerima pesan dari user dan mengembalikannya dengan balasan dari Gemini.
     */
    public function sendMessage(Request $request)
    {
        
        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        $userMessage = $request->input('message');

        try {
            
            $result = Gemini::geminiPro()->generateContent($userMessage);

            
            return response()->json(['reply' => $result->text()]);

        } catch (\Exception $e) {
            
            return response()->json(['error' => 'Maaf, terjadi kesalahan saat menghubungi AI.'], 500);
        }
    }
}