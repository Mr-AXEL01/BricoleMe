<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\artisan;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientController;

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
    Route::get('single-service' , [PagesController::class , 'single_service']);
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
    Route::get('/chat/{user_id}',[ChatController::class , 'chatForm'])->name('chatForm');
    Route::post('/chat/{user_id}', [ChatController::class, 'sendMessage'])->name('sendMessage');
});
// Admin Ressources
Route::group([] , function () {
    Route::get('/admin/dashboard' , [AdminController::class , 'dashboard']);
    Route::get('/admin/users' , [AdminController::class , 'users']);


    Route::get('/admin/claims' , [AdminController::class , 'claims']);


});

//Goooooooooooooooooooooooooooooooooooooooooooooooooooooooogle//
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

require __DIR__.'/auth.php';



// artisan resources
Route::group([] , function () {
Route::get('/artisan/dashboard' , function () {
    return view('artisan.dashboard');
});

Route::get('/artisan/info' , function () {
    return view('artisan.info');
});

// Route::post('/ArtisanRegister' ,[artisan::class , 'register']);

});
Route::middleware(['auth'])->group(function () {
    Route::post('/artisan/', [artisan::class, 'createartisan'])->name('artisan');
});


// ==================================client routes================================

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/reservation' , [ClientController::class , 'reservation'])->name('reservation');
    Route::get('/client/reclamation' , [ClientController::class , 'reclamation']);
    Route::get('/client/reclamation-forme' , [ClientController::class , 'reclamationForme']);
    Route::get('/client/review' , [ClientController::class , 'review']);
    Route::get('/client/destroy/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
  
});