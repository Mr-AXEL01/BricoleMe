<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard() {

        $clients = User::whereHas('roles', function ($query) {
            $query->where('name', 'client');
        })->get();

        $artisans = User::whereHas('roles', function ($query) {
            $query->where('name', 'artisan');
        })->get();

        return view('admin.dashboard', compact('artisans', 'clients'));
    }

    public function users()
    {

        return view('admin.users');
    }

    public function claims() {
        return view('admin.claims');
    }

}
