<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Reservation;

class DevisController extends Controller
{
public function generate($id)
{
    $reservations = Reservation::where('client_id', auth()->user()->client->id)->first();
    
    $client_name = $reservations->client->user->name;
    $artisan_name = $reservations->service->artisan->user->name;
    $artisan_phone = $reservations->service->artisan->user->phone;
    $artisan_email = $reservations->service->artisan->user->email;


    $services = [
        ['name'=>$reservations->service->name , 'priceTotal' => $reservations->tarif_total],
       
    ];


    $data = [
        'client_name' => $client_name,
        'artisan_name' => $artisan_name,
        'artisan_phone' => $artisan_phone,
        'artisan_email' => $artisan_email,
        'services' => $services,
    ];

    $pdf = Pdf::loadView('devis', $data);

    # Option 1) display the PDF in the browser
    return $pdf->stream();

    # Option 2) Download the PDF
    // return $pdf->download('invoice.pdf');

}

}