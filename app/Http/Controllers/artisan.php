<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artisan extends Controller
{
    public function register(Request $request)
    {
       
    
        public function create(Request $request)
        {
            $request->validate([
                'images' => 'required|array',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                'description' => 'required|string',
            ]);
        
            $uploadedImages = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('images'); 
                $uploadedImages[] = $path;
            }
        
            $user_id = auth()->id(); 
        
            $artisan = Artisan::create([
                'user_id' => $user_id,
                'images' => $uploadedImages,
                'description' => $request->description,
            ]);
        
            return redirect()->route('artisan.index')->with('success', 'Artisan created');
        }
        

}
