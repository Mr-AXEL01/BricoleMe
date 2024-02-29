<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis</title>
    <link href="{{ asset('css/devis.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
    <form action="{{ route('client.download') }}" method="POST">
        @csrf
        <div class="container">
            <div class="header text-center">
                <h1 class="text-3xl font-bold">Devis</h1>
                <p class="text-lg">BrecouleMe</p>
                <p>Phone: +212 565345589</p>
                <p>Email: BrecoleMe@services.com</p>
            </div>
            <div class="section">
                <h2 class="text-xl font-semibold">For Mr:</h2>
                <p><strong>Client Name:</strong> {{ $data['client_name'] }}</p>
            </div>
            <div class="section">
                <h2 class="text-xl font-semibold">Artisan Information</h2>
                <p><strong>Artisan Name:</strong> {{ $data['artisan_name'] }}</p>
                <p><strong>Artisan Phone:</strong> {{ $data['artisan_phone'] }}</p>
                <p><strong>Artisan Email:</strong> {{ $data['artisan_email'] }}</p>
            </div>
            <div class="section">
                <h2 class="text-xl font-semibold">Services</h2>
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Service</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">dureé</th>
                            <th class="px-4 py-2">tarif Totale</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td class="border px-4 py-2">{{ $data['service_name'] }}</td>
                                <td class="border px-4 py-2">{{ $data['service_price'] }}</td>
                                <td class="border px-4 py-2">{{ $data['dure'] }} </td>
                                <td class="border px-4 py-2">{{ $data['tarif_totale'] }} </td>


                                <input type="hidden" name="serviceName" value="{{ $data['service_name'] }}">
                                <input type="hidden" name="priceTotal" value="{{ $data['service_price'] }}">
                                <input type="hidden" name="tarifTotale" value="{{ $data['tarif_totale'] }}">
                                <input type="hidden" name="dure" value="{{ $data['dure'] }}">
                            </tr>


                    </tbody>
                </table>
            </div>
            <div class="footer mt-8 ">
                <p class="mb-4 ">Date:{{ $data['current_time'] }}</p>
                <p class="mt-5">Authorized Signature: <input type="text" name="signature"
                        class="border border-black pr-3"></p>
            </div>
        </div>


        <input type="hidden" name="clientName" value="{{ $data['client_name'] }}">
        <input type="hidden" name="clientEmail" value="{{ $data['client_email'] }}">
        <input type="hidden" name="artisanName" value="{{ $data['artisan_name'] }}">
        <input type="hidden" name="artisanPhone" value="{{ $data['artisan_phone'] }}">
        <input type="hidden" name="artisanEmail" value="{{ $data['artisan_email'] }}">
        <input type="hidden" name="currentTime" value="{{ $data['current_time'] }}">


        <button class="button ">
            <p class="text">
                Download
            </p>
            <div class="svg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-download" viewBox="0 0 16 16">
                    <path
                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                    </path>
                    <path
                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                    </path>
                </svg>
            </div>
        </button>
    </form>
</body>

</html>
