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

    public function sendMessage(Request $request, $user_id)
    {
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);
        $message = new Message;
        $message->sender = auth()->id();
        $message->receiver = $user_id;
        $message->message = $validatedData['message'];
        $message->save();

        // Get the recipient user
        $recipient = User::findOrFail($user_id);

        broadcast(new MessageSent($recipient, $message->message));
        return redirect()->route('chatForm', $user_id)->with('success', 'Message sent successfully!');

    }
}
