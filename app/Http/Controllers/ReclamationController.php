<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;

class ReclamationController extends Controller
{
    

    // __________________function pour creation d'une reclamation____________________

    public function createReclamation(Request $request) {
     
        $reclamation = new Reclamation();
        $reclamation->message = $request->input('message');
        $reclamation->reservation_id = $request->input('reservationId');
        $reclamation->status = 'pending';

        $reclamation->save();

        
        return redirect()->route('reclamation')->with('success','you are reclamed successfuly');
    }


    // ________________function pour affichage des reclamation pour client___________________
    
    public function reclamation() {
        $reclamations = Reclamation::join('reservations', 'reclamations.reservation_id','=', 'reservations.id')
         ->where('client_id', auth()->user()->client->id)->get();
        

        return view('client.reclamation',['reclamations' => $reclamations]);
    }


    // __________________function pour affichage de formulaire de reclamation avec id de reservation_______
    
    public function reclamationForme($id) {

        return view('client.reclamationForme',['id'=>$id]);
    }


     // ________________function pour affichage des reclamation pour admin___________________
    
     public function reclamationAdmin() {
        $reclamations = Reclamation::all();

        return view('admin.claims',['reclamations' => $reclamations]);

    }

    //  _________________function pour l'acceptation de admin une reclamation_______________
    
    public function accepetedClaims($id)
    {
        $reclamationUpdate = Reclamation::findOrFail($id);

        $reclamationUpdate->status ='done';
        
        $reclamationUpdate->save();
        
        return redirect()->route('admin.claims')->with('success','reclamation accepted successfuly');
    }
    

}