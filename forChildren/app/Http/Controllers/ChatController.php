<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request)
    {
      

        event(new \App\Events\ChatMessageEvent($request->message));
        Message::create([
            'UserId' => auth()->user()->id,
            'Message' => $request->message,
            'ChatRoom' =>0,
        ]);
        // return response()->json(['success' => true]);
    }

    public function showChat($idRoom){
        $messages=Message::where('ChatRoom',$idRoom)->get();
        return view('chat', compact('messages'));
    }
}
