<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Admin Ressources
Route::group([] , function () {
    Route::get('/admin/dashboard' , [AdminController::class , 'dashboard']);
    Route::get('/admin/users' , [AdminController::class , 'users']);
<<<<<<< HEAD
    Route::get('/admin/claims' , [AdminController::class , 'claims']);
=======
>>>>>>> 24113f3 (Add new features ui Admin)
});
require __DIR__.'/auth.php';

Route::get('/Adashboard' , function () {
    return view('artisan.dashboard');
});

Route::get('/ArtisanInfo' , function () {
    return view('artisan.info');
});
