<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArtisanController extends Controller
{
   
    public function edit()
    {
        $artisan = auth()->user();

        return view('artisan.update', compact('artisan'));
    }

    public function Update(Request $request, $id)
    {
        try {
            $request->validate([
                'multiplePhotos' => 'required|array',
                'multiplePhotos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'required|string',
            ]);

      
            Log::info('Validation passed.');

            $user_id = auth()->id();

            if ($id) {
                $artisan = Artisan::findOrFail($id);

                if ($request->hasFile('multiplePhotos')) {
                    $picturesNames = [];

                    foreach ($request->file('multiplePhotos') as $file) {
                        $picturesName = time() . '.' . $file->extension();
                        $file->storeAs('public/img', $picturesName);
                        $picturesNames[] = $picturesName;
                    }

                  

                    Log::info('Uploaded pictures ' . implode(', ', $picturesNames));
                }

              
                Log::info('User ID: ' . $user_id);
                Log::info('Description: ' . $request->description);

                $test = $artisan->update([
                    'user_id' => $user_id,
                    'images' => $picturesNames,
                    'description' => $request->description,
                ]);

            
                Log::info('Update successful: ' . $test);

                return redirect()->route('artisan')->with('success', 'Artisan updated successfully');
            }
        } catch (\Exception $e) {
            // Log any exceptions that occur during the process
            Log::error('Exception: ' . $e->getMessage());
            // Handle the exception as needed (e.g., display an error message to the user)
            return redirect()->back()->with('error', 'An error occurred during the update.');
        }
    }
    
        

}
