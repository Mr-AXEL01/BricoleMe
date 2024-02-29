<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ClientController extends Controller
{
    
//    ______________function pour affichage des reservation_____________
    
    public function reservation() {
        $reservations = Reservation::where('client_id', auth()->user()->client->id)->get();
        $currentDate = new \DateTime();

      
    
        foreach ($reservations as $reservation) {
            $reservationDate = new \DateTime($reservation->dateDepart . ' 08:00');
            $reservationFinal = new \DateTime($reservation->dateFinal . ' 17:00');
            if ($currentDate >= $reservationDate && $currentDate <= $reservationFinal ) {
                $reservation->status = 'doing';
            } elseif ($currentDate > $reservationDate) {
                $reservation->status = 'done';
            }else{
                $reservation->status = 'pending';
            }
        }
    
        return view('client.reservation', ['reservations' => $reservations]);
    }

    
    // ____________cancel de reservation_______________

    public function destroy($id) {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservation')->with('success', 'Reservation cancel successfully');
    }

    public function profile() {
        
        return view('client.profile');
    }
}