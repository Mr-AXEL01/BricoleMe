<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
      // __________________function pour creation d'une Review____________________

      public function createReiew(Request $request) {
     
        $Review = new Review();
        $Review->rating = $request->input('rating');
        $Review->comment = $request->input('comment');
        $Review->reservation_id = $request->input('reservationId');

        $reservation =  Reservation::find($Review->reservation_id);
        $reservation->reviewed = 1;
        $reservation->save();

        $Review->save();

        
        return redirect()->route('reservation')->with('success','you are review successfuly');
    }

    // __________________function pour affichage de formulaire de Review avec id de reservation_______
    
    public function ReviewForme($id) {

        return view('client.review',['id'=>$id]);
    }
}