<?php

namespace App\Http\Controllers;

use App\Models\Metier;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\error;

class PagesController extends Controller
{
    //

    public function all_services() {
        $metiers = Metier::all();
        $services = Service::all();
        $data = [
            'metiers' => $metiers,
            'services' => $services
        ];
        return view('pages.all-services' , $data);
    }
    public function services_data(Request $request) {
        $metier = $request->searchVal;
        $prices = $request->priceVal;



        if (strpos($prices, '-') !== false) {
            [$minValue, $maxValue] = explode('-', $prices);
            $min_price = $minValue;
            $max_price = $maxValue;
        } else {
            $minValue = null;
            $maxValue = null;
            $min_price = $minValue;
            $max_price = $maxValue;
        }
        $query = Service::query();
        if ( isset($max_price)  && isset($min_price)) {
            $query->whereBetween('tarif', [$min_price, $max_price]);

        }
        if ($metier) {
            $query->whereHas('artisan.metier', function ($q) use ($metier) {
                $q->where('name', 'like', '%' . $metier . '%');
            });
        }
        $services = $query->with(['artisan.metier', 'artisan.user'])->get();
        $data = [
            'services' => $services,
        ];
        return response()->json($data);

    }
    public function single_service() {


        return view('pages.single-service');
    }
}
