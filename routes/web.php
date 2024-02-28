<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ReviewController;

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
    Route::get('/devis/{id}', [DevisController::class, 'generate'])->name('client.download');

//    --------------chat----------------
    Route::get('/chat/{user_id}',[ChatController::class , 'chatForm'])->name('chatForm');
    Route::post('/chat/{user_id}', [ChatController::class, 'sendMessage'])->name('sendMessage');
});
// Admin Ressources
Route::group([] , function () {
    Route::get('/admin/dashboard' , [AdminController::class , 'dashboard']);
    Route::get('/admin/users' , [AdminController::class , 'users']);

    // _______________affichage des reclamation pour admin________________
    
    Route::get('/admin/claims' , [ReclamationController::class , 'reclamationAdmin'])->name('admin.claims');
    
    // ________________accepte de reclamation___________________
    
      
    Route::put('/admin/claimsAccept/{id}' , [ReclamationController::class , 'accepetedClaims'])->name('admin.claims-accepted');


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

Route::get('/artisan/update' , function () {
    return view('artisan.update');
});

Route::get('/artisan/service' , function () {
    return view('artisan.service');
});

Route::get('/artisan/edit', [ArtisanController::class, 'edit'])->name('edit-artisan');
Route::post('/artisan/update/{id}', [ArtisanController::class, 'update'])->name('update-artisan');
Route::get('/artisan/update', [ArtisanController::class, 'artisanRegisterData'])->name('artisan-register-data');

});

// Route::post('/ArtisanRegister' ,[artisan::class , 'register']);


Route::middleware(['auth'])->group(function () {
    Route::post('/artisan/', [artisan::class, 'createartisan'])->name('artisan');
});


// ==================================client routes================================

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/reservation' , [ClientController::class , 'reservation'])->name('reservation');
    
        // ___________client cancel reservarion______________
    Route::get('/client/destroy/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
    
                // ==================reclamation controller=================
    //  _______page des reclamation___________
    Route::get('/client/reclamation' , [ReclamationController::class , 'reclamation'])->name('reclamation');
    
    //  _______page de  Forme de reclamation avec id de reservation___________
    Route::get('/client/reclamation-forme/{id}' , [ReclamationController::class , 'reclamationForme'])->name('client.reclamation-forme');
    
    // ___________create une reclamation , insert into reaclamation___________
    Route::post('/client/reclamer' , [ReclamationController::class , 'createReclamation'])->name('client.reclamer');
    
                // ==================review controller=====================

                 //  _______page de  Forme de review avec id de reservation___________
    Route::get('/client/review/{id}' , [ReviewController::class , 'ReviewForme'])->name('client.review');

      // ___________create une review , insert into review________________
      Route::post('/client/review' , [ReviewController::class , 'createReiew'])->name('client.addReview');
  
});