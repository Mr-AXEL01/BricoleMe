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
    <div class="bg-white rounded-lg shadow-lg p-4 mb-8" id="chatMessages">
        {{-- Chat messages will be dynamically added here --}}
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

<script src="https://cdn.jsdelivr.net/npm/laravel-echo@^1.10"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize Laravel Echo with Pusher
        window.Echo = new Echo({
            broadcaster: 'pusher',
            key: '{{ env('PUSHER_APP_KEY') }}',
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true,
        });

        // Listen for events
        Echo.private('chat{{ $user_id }}')
            .listen('.App\\Events\\MessageSent', (event) => {
                console.log('New message received:', event);
                // Update chat interface with the new message
                var chatMessages = $('#chatMessages');
                var messageElement = $('<div>');
                messageElement.html('<p><strong>' + event.message.sender + '</strong>: ' + event.message.message + '</p><small>Sent at: ' + event.message.created_at + '</small>');
                chatMessages.append(messageElement);
            });
    });
</script>

</body>
</html>
