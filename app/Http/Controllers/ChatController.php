<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chatForm($user_id)
    {

        $messages = Message::where(function ($query) use ($user_id) {
            $query->where('sender', auth()->id())
                ->where('receiver', $user_id);
        })->orWhere(function ($query) use ($user_id) {
            $query->where('sender', $user_id)
                ->where('receiver', auth()->id());
        })->orderBy('created_at', 'asc')->get();

        return view('chat', compact('messages', 'user_id'));
    }


}
