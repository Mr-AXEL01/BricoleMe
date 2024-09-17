<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Private Messaging</title>
        <script lang="text/javascript" src="https://cdn.ably.com/lib/ably.min-1.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
        <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

        <style>
            .message {
                clear: both;
                overflow: auto;
                margin-bottom: 10px;
            }
        
            .sender-message {
                float: right;
                background-color: #007bff;
                color: #fff;
                border-radius: 15px;
                padding: 10px;
                max-width: 70%;
                word-wrap: break-word;
            }
        
            .recipient-message {
                float: left;
                background-color: #f2f2f2;
                color: #333;
                border-radius: 15px;
                padding: 10px;
                max-width: 70%;
                word-wrap: break-word;
            }
        
            .message-content {
                word-wrap: break-word;
            }

            .comic-button {
                display: inline-block;
                padding: 10px 20px;
                font-size: 24px;
                font-weight: bold;
                text-align: center;
                text-decoration: none;
                color: #fff;
                background-color: #ff5252;
                border: 2px solid #000;
                border-radius: 10px;
                box-shadow: 5px 5px 0px #000;
                transition: all 0.3s ease;
                cursor: pointer;
            }

            .comic-button:hover {
            background-color: #fff;
            color: #ff5252;
            border: 2px solid #ff5252;
            box-shadow: 5px 5px 0px #ff5252;
            }

            .comic-button:active {
            background-color: #fcf414;
            box-shadow: none;
            transform: translateY(4px);
            }

        </style>
</head>
<body>
    @auth
        @role('client')
            <a href="/client/reservation" class="comic-button">Dashboard</a>
        @else
            <a href="/artisan/dashboard" class="comic-button">Dashboard</a>
        @endrole
    @endauth

    <div class="container">
        <h1 class="text-center mt-4 mb-5">BricoleMe Chat</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Select Recipient
                    </div>
                    <div class="card-body">
                        <select id="recipientSelect" class="form-select mb-3">
                            <option value="">Select Recipient</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="map" style = "width:415px; height:580px;"></div>
                
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div id="conversationHeader" class="card-header bg-primary text-white">
                        Conversation
                    </div>
                    <div id="messages" class="card-body overflow-auto" style="height: 400px;">
                    </div>
                    <div class="card-footer">
                        <input type="text" id="messageInput" class="form-control mb-3" placeholder="Type your message...">
                        <button id="sendMessageBtn" class="btn btn-primary float-end">Send</button>
                        <button id="shareLocationBtn" class="btn btn-primary">Share Location</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        var ably = new Ably.Realtime('yRnqMQ.ksrZYQ:1d5I8PS_HO7lhsLBdMDx18oatte_GPYAbHXmfYEG_g8');
        var channel = ably.channels.get('private-messages');
        var mapOptions = {
            center: [33.5333312 ,-7.583331],
            zoom: 12
        }
        var markerOptions = {
            title: "MyLocation",
            clickable: true,
            draggable: true
        }
        var marker = new L.Marker([33.5333312, -7.583331], markerOptions);
        marker.bindPopup('This is your position').openPopup();
        var map = new L.map('map', mapOptions);
        var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        marker.addTo(map);
        map.addLayer(layer);

        map.on('click', function(e) {
            marker.setLatLng(e.latlng);
            $('#latitudeInput').val(e.latlng.lat);
            $('#longitudeInput').val(e.latlng.lng);
        });

        $('#shareLocationBtn').click(function() {
        var latitude = marker.getLatLng().lat;
        var longitude = marker.getLatLng().lng;
        var message = 'Location: Latitude ' + latitude + ', Longitude ' + longitude;

        var recipientId = $('#recipientSelect').val();

        if (recipientId && message) {
            channel.publish('messageEvent', {
                senderName: '{{ Auth::user()->name }}',
                recipientId: recipientId,
                message: message,
                senderId: '{{ Auth::user()->id }}'
            });
            $.ajax({
                type: 'POST',
                url: '{{ route("sendMessage") }}',
                data: {
                    recipientId: recipientId,
                    message: message,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {},
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
            $('#messageInput').val('');
        }
    });

        $(document).ready(function() {
            function fetchOldMessages(recipientId) {
                $('#messages').empty();

                $.ajax({
                    type: 'GET',
                    url: '/getMessages/' + recipientId,
                    success: function(response) {
                        $.each(response, function(index, message) {
                            displayMessage(message.senderName, message.message, message.sender);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            $('#recipientSelect').change(function() {
                var recipientName = $('#recipientSelect option:selected').text();
                $('#conversationHeader').html('Conversation with<span style="color: #000000;"> ' + recipientName + '</span>');
                var recipientId = $(this).val();
                fetchOldMessages(recipientId);
            });

            channel.subscribe('messageEvent', function(message) {
                var senderName = message.data.senderName;
                var messageContent = message.data.message;
                var senderId = message.data.senderId;
                var recipientId = '{{ Auth::user()->id }}';

                if ((recipientId == message.data.recipientId) || (senderId == recipientId)){
                    displayMessage(senderName, messageContent, senderId);
                }
            });

            function displayMessage(senderName, message, senderId) {
                var messageHtml = '<div class="message">';
                if (senderId == '{{ Auth::user()->id }}') {
                    messageHtml += '<div class="sender-message">' +
                                        '<div class="message-content">' +
                                            message +
                                        '</div>' +
                                    '</div>';
                } else {
                    messageHtml += '<div class="recipient-message">' +
                                        '<div class="message-content">' +
                                            message +
                                        '</div>' +
                                    '</div>';
                }
                messageHtml += '</div>';
                
                $('#messages').append(messageHtml);
            }

            $('#sendMessageBtn').click(function() {
                var recipientId = $('#recipientSelect').val();
                var message = $('#messageInput').val();

                if (recipientId && message) {
                    channel.publish('messageEvent', { 
                        senderName: '{{ Auth::user()->name }}', 
                        recipientId: recipientId, 
                        message: message,
                        senderId: '{{ Auth::user()->id }}'
                    });
                    $.ajax({
                        type: 'POST',
                        url: '{{ route("sendMessage") }}',
                        data: {
                            recipientId: recipientId,
                            message: message,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                    $('#messageInput').val('');
                }
            });
            
        });
    </script>
    
</body>
</html>
