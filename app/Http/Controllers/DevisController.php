<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
public function generate(Request $request)
{
    $client_name = 'John Doe';
    $artisan_name = 'Jane Smith';
    $artisan_phone = '+123456789';
    $artisan_email = 'jane@example.com';


    $services = [
        ['name'=>'draw_wall' , 'price' => '€100'],
        ['name'=>'fixing car engine', 'price' => '€150'],
        ['name'=>'wash car', 'price' => '€20'],
    ];


    $data = [
        'client_name' => $client_name,
        'artisan_name' => $artisan_name,
        'artisan_phone' => $artisan_phone,
        'artisan_email' => $artisan_email,
        'services' => $services,
    ];
}

}
