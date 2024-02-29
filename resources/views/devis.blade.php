<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{public_path('/css/devis.css')}}" rel="stylesheet">
    <title>Devis</title>
</head>
<body>
<div class="container">
    <div class="header">
        <h1 class="title">Devis</h1>
        <p class="subtitle">BrecouleMe</p>
        <p>Phone: +212 565345589</p>
        <p>Email: BrecoleMe@services.com</p>
    </div>
    <div class="section">
        <h2 class="subtitle">For Mr:</h2>
        <p><strong>Client Name:</strong> {{$client_name}}</p>
    </div>
    <div class="section">
        <h2 class="subtitle">Artisan Information</h2>
        <p><strong>Artisan Name:</strong> {{$artisan_name}}</p>
        <p><strong>Artisan Phone:</strong> {{$artisan_phone}}</p>
        <p><strong>Artisan Email:</strong> {{$artisan_email}}</p>
    </div>
    <div class="section">
        <h2 class="subtitle">Services</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Service</th>
                <th>Price/heur</th>
                <th>dure</th>
                <th>tarif Totale</th>
            </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td>{{ $service_name}}</td>
                    <td>{{ $service_price}}</td>
                    <td>{{ $dure}}</td>
                    <td>{{ $tarif_totale}}</td>
                </tr>
           
            </tbody>
        </table>
    </div>
    <div class="footer text-left">
        {{-- <p>Authorized Signature :</p> --}}
        <p><strong> <i> {{ $signature}}</i></strong></p>
        <p>Date:{{ $current_time}}</p>
    </div>
</div>
</body>
</html>
