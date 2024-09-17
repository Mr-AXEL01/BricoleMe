<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class DevisController extends Controller
{
public function generate(Request $request)
{



    $client_name = $request->input('clientName');
    $client_email = $request->input('clientEmail');
    $artisan_name = $request->input('artisanName');
    $artisan_phone = $request->input('artisanPhone');
    $artisan_email = $request->input('artisanEmail');
    $service_name = $request->input('serviceName');
    $service_price = $request->input('priceTotal');
    $current_time = $request->input('currentTime');
    $tarif_totale = $request->input('tarifTotale');
    $dure = $request->input('dure');
    $signature = $request->input('signature');




    $data = [
        'client_name' => $client_name,
        'artisan_name' => $artisan_name,
        'artisan_phone' => $artisan_phone,
        'artisan_email' => $artisan_email,
        'service_name' => $service_name,
        'service_price' => $service_price,
        'current_time' => $current_time,
        'tarif_totale' => $tarif_totale,
        'dure' => $dure,
        'signature' => $signature,
    ];


    $pdf = Pdf::loadView('devis', $data);

    # Save PDF to storage for attachment
    $pdfPath = storage_path('app/public/devis.pdf');
    $pdf->save($pdfPath);

    # Send email with PDF attachment
    Mail::send([], [], function($message) use ($pdfPath, $client_email) {
        $message->to($client_email)
            ->subject('Your Devis')
            ->attach($pdfPath);
    });

    # Option 1) display the PDF in the browser
    return $pdf->stream();

    # Option 2) Download the PDF
    // return $pdf->download('invoice.pdf');

}

// ________________ ajoute de signature electronique________________

public function signature($id)
{

    $reservations = Reservation::where('client_id', auth()->user()->client->id)->first();
    $toDate = Carbon::parse($reservations->dateDepart);
    $fromDate = Carbon::parse($reservations->dateFinal);

    $days = $toDate->diffInDays($fromDate);

    $client_name = $reservations->client->user->name;
    $client_email = $reservations->client->user->email;
    $artisan_name = $reservations->service->artisan->user->name;
    $artisan_phone = $reservations->service->artisan->user->phone;
    $artisan_email = $reservations->service->artisan->user->email;
    $service_name = $reservations->service->name;
    $service_price = $reservations->service->tarif;
    $tarif_totale = $reservations->tarif_total;
    $dure = $days;





    $current_time = new \DateTime();
    $current_time_formatted = $current_time->format('Y-m-d H:i:s');



    $data = [
        'client_name' => $client_name,
        'client_email' => $client_email,
        'artisan_name' => $artisan_name,
        'artisan_phone' => $artisan_phone,
        'artisan_email' => $artisan_email,
        'current_time' => $current_time_formatted,
        'tarif_totale' => $tarif_totale,
        'dure' => $dure,
        'service_name' => $service_name,
        'service_price' => $service_price
    ];

    return view('client.signature-electronique',['data' => $data]);
}

}
