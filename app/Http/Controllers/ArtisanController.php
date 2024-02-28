<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MetierArtisan;
use App\Models\CompetanceArtisan;
use App\Models\Metier;
use App\Models\Competance;
use App\Models\Image;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ArtisanController extends Controller
{
    public function Update(Request $request, $id)
    {
        // Debugging statement to check the received data
       
    
        $request->validate([
            'description' => 'required|string',
            'metier_id' => 'required',
            'competences' => 'required',
            'multiplePhotos' => 'required',
        ]);

      
        $artisan = auth()->user();
       
        if ($request->hasFile('multiplePhotos')) {
            $files = $request->file('multiplePhotos');
            foreach ($files as $file) {
                $picturesName = time() . '.' . $file->extension();
                $file->storeAs('public/image', $picturesName);
                Image::create([
                    'image' => $picturesName,
                    'artisan_id' => $artisan->id,
                ]);
            }
        }
       
    
        foreach ($request->input('competences') as $competenceId) {
            CompetanceArtisan::create([
                'artisan_id' => $artisan->id,
                'competance_id' => $competenceId,
            ]);
        }
    
        MetierArtisan::create([
            'artisan_id' => $artisan->id,
            'metier_id' => $request->input('metier_id'),
        ]);
       
    
        if ($id) {
            $artisan = Artisan::findOrFail($id);
    
            $artisan->update([
                'description' => $request->description,
             
            ]);
    
            // dd($request->all());
    
            // return redirect()->view('artisa.dashboard')->with('success', 'Artisan updated successfully');
            return view('artisan.dashboard');
        }
    }
    
    public function ArtisanRegisterData()
    {
        $Metiers = Metier::all();
        $competences = Competance::with('Metier')->get();
        
        return view('artisan.update', [
            'Metiers' => $Metiers,
            'competences' => $competences,
        ]);
    }
}

