<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class AblyController extends Controller
{
    public function chat()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('chatty', ['users' => $users]);
    }

    public function sendMessage(Request $request)
    {
        $validatedData = $request->validate([
            'recipientId' => 'required',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->sender = auth()->id();
        $message->receiver = $validatedData['recipientId'];
        $message->message = $validatedData['message'];
        $message->save();

        return response()->json(['success' => true]);
    }

    public function getMessages($recipientId)
    {
        $userId = auth()->id();

        $messages = Message::join('users', 'messages.sender', '=', 'users.id')
            ->select('users.name as senderName', 'messages.sender', 'messages.message')
            ->where(function($query) use ($userId, $recipientId) {
                $query->where('sender', $userId)
                    ->where('receiver', $recipientId);
            })->orWhere(function($query) use ($userId, $recipientId) {
                $query->where('sender', $recipientId)
                    ->where('receiver', $userId);
            })->orderBy('messages.created_at', 'asc')->get();

        return response()->json($messages);
    }

}
