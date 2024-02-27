<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Artisan;
use App\Models\Client;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
           
            'role' => ['required'],
            'phone' => ['required'],
            'ville' => ['required'],
            'picture' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $imageName = time() . '.' . $request->picture->extension();
        $request->file('picture')->storeAs('public/pics', $imageName);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'picture' => $imageName,
            'city' => $request->ville,
            'phone' => $request->phone,
        ]);
        
        Auth::login($user);
        event(new Registered($user));
        
        // dd($user);
        if ($request->role === 'artisan'){
        
            $artisan = Artisan::create([
                'user_id' => $user->id,
            ]);
            $user->assignRole('artisan');
            return redirect(RouteServiceProvider::UPDATE);
        }

        if ($request->role === 'client') {
        
            $client = Client::create([
                'user_id' => $user->id,
            ]);
            $user->assignRole('client');
            return redirect(RouteServiceProvider::CLIENT);
        }

        // $user->assignRole('admin');
        
        return redirect(RouteServiceProvider::HOME);
    }
}