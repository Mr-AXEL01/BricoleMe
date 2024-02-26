<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artisan extends Controller
{
   
    
    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            'description' => 'required|string',
            'metier_id' => 'required|exists:jobs,id',
            'competence_id' => 'required|exists:skills,id',
        ]);

        $uploadedImages = [];
        foreach ($request->file('images') as $image) {
            $path = $image->store('images'); 
            $uploadedImages[] = $path;
        }

        $user_id = auth()->id();

        if ($id) {
        
            $artisan = Artisan::findOrFail($id);
            $artisan->update([
                'user_id' => $user_id,
                'images' => $uploadedImages,
                'description' => $request->description,
            ]);

       
            $artisan->matiers()->sync([$request->metiers_id]);
            $artisan->competences()->sync([$request->skill_id]);
       

        return redirect()->route('artisan')->with('success', 'Artisan ');
    }
        

}
