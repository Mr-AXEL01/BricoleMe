<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-10">

    <h1 class="text-3xl font-semibold mb-6">Chat</h1>

    <!-- Chat messages -->
    <div class="bg-white rounded-lg shadow-lg p-4 mb-8">
        @foreach($messages as $message)
            <div class="mb-4">
                <p class="text-gray-600"><strong>{{ $message->sender }}</strong>: {{ $message->message }}</p>
                <small class="text-gray-400">Sent at: {{ $message->created_at->format('Y-m-d H:i:s') }}</small>
            </div>
        @endforeach
    </div>

    <!-- Chat form -->
    <form action="{{ route('sendMessage', $user_id) }}" method="POST" class="flex items-center">
        @csrf
        <input type="text" name="message" placeholder="Type your message here" class="flex-1 mr-2 py-2 px-4 rounded-lg bg-gray-200 focus:outline-none focus:ring focus:ring-blue-400">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-400">Send</button>
    </form>

    <!-- Success message -->
    @if (session('success'))
        <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

</div>

</body>
</html>

