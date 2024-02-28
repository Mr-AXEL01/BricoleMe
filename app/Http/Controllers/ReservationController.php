<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function store($id){
        $services = Service::find($id);
    }
}
