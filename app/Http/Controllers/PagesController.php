<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\error;

class PagesController extends Controller
{
    //

    public function all_services() {

        return view('pages.all-services' );
    }
    public function services_data(Request $request) {

        $services = service::with('artisan')->get();

//        $services = DB::table('services')
//                    ->join('artisans' , 'services.artisan_id' , '=' , 'artisans.id')
//                    ->join('metier_of_artisans' , 'artisans.id' , '=' , 'metier_of_artisans.artisan_id')
//                    ->join('metiers' , 'metier_of_artisans.metier_id' , '=' , 'metiers.id')
//                    ->get();
        dump($services);

        $data = [
            'services' => $services
        ];
        return response()->json($data);
    }
    public function single_service() {


        return view('pages.single-service');
    }
}
