<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard() {

        return view('admin.dashboard');
    }

    public function users()
    {

        return view('admin.users');
    }
<<<<<<< HEAD
    public function claims() {
        return view('admin.claims');
    }
=======
>>>>>>> 24113f3 (Add new features ui Admin)
}
