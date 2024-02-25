<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function all_services() {
        return view('pages.all-services');
    }
}
