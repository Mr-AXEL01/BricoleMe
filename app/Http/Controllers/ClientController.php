<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    
   
    
    public function reservation() {

        return view('client.reservation');
    }
    public function reclamation() {

        return view('client.reclamation');
    }

    public function reclamationForme() {

        return view('client.reclamationForme');
    }
    public function review(){

        return view('client.review');
    }
}