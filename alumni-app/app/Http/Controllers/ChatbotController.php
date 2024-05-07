<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function interactWithChatbot(Request $request)
    {
        // Make a POST request to the Flask chatbot endpoint
        $response = Http::post('http://127.0.0.1:5000/get', [
            'msg' => 'User message goes here',
        ]);

        // Get the JSON response from the Flask chatbot
        $data = $response->json();

        // Use the response data as needed

        // Return the response or redirect as needed
    }
}
