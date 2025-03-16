<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Envoie un message à un utilisateur et diffuse l'événement.
     */

     public function index(Request $request){
        return view('chat');
     }

     public function sendMessage(Request $request)
     {
         $message = $request->input('message');
         $user = auth()->user()->id;  
         broadcast(new MessageSent($message, $user));
         return response()->json(['status' => 'Message envoyé !']);
     }
}

