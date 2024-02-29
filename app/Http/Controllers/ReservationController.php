<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // ________________creation d'une reservation_______________
    
    public function createReservation(Request $request){
        
        // Récupérer les données de la requête
        $dateDepart = $request->input('dateDepart');
        $dateFinale = $request->input('dateFinale');
        $serviceId = $request->input('service_id');
        $clientId = auth()->user()->id;
        
        // Vérifier si une réservation similaire existe déjà
        $existingReservation = Reservation::where('dateDepart', $dateDepart)
                                           ->where('dateFinal', $dateFinale)
                                           ->where('service_id', $serviceId)
                                           ->where('client_id', $clientId)
                                           ->exists();
    
        // Si une réservation similaire existe déjà, retourner un message d'erreur
        if($existingReservation) {
            return redirect()->route('all-services')->with('error', 'Vous avez déjà réservé ce service pour ces dates.');
        }
    
        // Si aucune réservation similaire n'existe, créer une nouvelle réservation
        $reservation = new Reservation();
        $reservation->dateDepart = $dateDepart;
        $reservation->dateFinal = $dateFinale;
        $reservation->service_id = $serviceId;
        $reservation->client_id = $clientId;
        $reservation->tarif_total = 100;
        $reservation->status = 'pending';
        
        $reservation->save();
    
        // Rediriger avec un message de succès
        return redirect()->route('all-services')->with('success', 'Votre réservation a été effectuée avec succès.');
    }
    
}