<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function claims() {
        return view('admin.claims');
    }

    public function delete($userId)
    {
        $user = User::findOrFail($userId);

        $user->delete();

        return redirect()->back()->with('success', 'User soft deleted successfully.');
    }

    public function suspendUser($userId, Request $request)
    {
        $user = User::find($userId);
        
        if ($user) {
            if ($user->suspended) {
                $user->suspended = false;
                $user->save();
                return redirect()->back()->with('success', 'User unsuspended successfully.');
            }
            else {
                $user->suspended = true;
                $user->suspended_until = Carbon::now()->addDays($request->input('duration'));
                $user->save();
                
                return redirect()->back()->with('success', 'User suspended successfully.');
            }
        }
        
        return redirect()->back()->with('error', 'Failed to suspend user.');
    }
}
