<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Review;

class ServiceController extends Controller
{
    /**
     * Display the artisan service page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){
        $artisan = auth()->user()->artisan;
        $services = $artisan->service()->get();

        return view('artisan.service', ['services' => $services]);
    }
    /**
     * Store a newly created service.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'hour' => 'required|integer|min:1',
            'tarif' => 'required|integer|min:0',
        ]);

        $imageName = time() . '.' . $request->picture->extension();
        $request->file('picture')->storeAs('public/userPics', $imageName);

        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'hour' => $request->hour,
            'tarif' => $request->tarif,
            'picture' => $imageName,
            'artisan_id' => auth()->user()->artisan->id,
        ]);

        return redirect()->route('artisan.dashboard')->with('success', 'Service created successfully');
    }

    public function destroy($serviceId)
    {
        $service = Service::findOrFail($serviceId);

        if ($service->artisan_id !== auth()->user()->artisan->id) {
            return response()->json(['error' => 'You are not authorized to delete this service'], 403);
        }

        $service->delete();

        return response()->json(['message' => 'Service deleted successfully'], 200);
    }

    // _____________________show detaills of service________________

    public function show($id){
        
        $service = Service::findOrFail($id);
        
        $artisanId = $service->artisan->id;
        $ratings = Review::join('reservations', 'reviews.reservation_id', '=', 'reservations.id')
                     ->join('services', 'reservations.service_id', '=', 'services.id')
                     ->where('artisan_id',$artisanId )
                     ->get();

       // Calcul de la moyenne des évaluations
        $avgRating = $ratings->avg('rating');
        
        // Arrondir la moyenne à l'entier le plus proche
        $avgRating = round($avgRating);
        // dd($avgRating);
         return view('pages.single-service', ['service' => $service , 'avgRating' => $avgRating]);
    }
}