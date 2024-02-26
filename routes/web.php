<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
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
// public resources
Route::get('/', function () {
    return view('welcome');
});
Route::group([], function() {
    Route::get('all-services' , [PagesController::class , 'all_services']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


//    ----------devis------------------
    Route::get('/devis', [DevisController::class, 'generate']);

//    --------------chat----------------
    Route::get('/chat/{user_id}',[ChatController::class , 'chatForm']);
    Route::post('/chat/{user_id}',[ChatController::class , 'sendMessage']);
});
// Admin Ressources
Route::group([] , function () {
    Route::get('/admin/dashboard' , [AdminController::class , 'dashboard']);
    Route::get('/admin/users' , [AdminController::class , 'users']);
    Route::get('/admin/claims' , [AdminController::class , 'claims']);
});
require __DIR__.'/auth.php';



// artisan resources
Route::group([] , function () {
Route::get('/artisan/dashboard' , function () {
    return view('artisan.dashboard');
});

Route::get('/artisan/info' , function () {
    return view('artisan.info');
});
});


