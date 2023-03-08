<?php

use App\Http\Controllers\AproposController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParcoursController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioDetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\ContactForm;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('accueil.index');
})->name('home');

/**
 * A propos
 * 
 * */
Route::resource('apropos', AproposController::class)
    ->only(['index']);

/**
 * Parcours
 * 
 * */
Route::resource('parcours', ParcoursController::class)
    ->only(['index']);

/**
 * Services
 * 
 * */
// $services_href = ServiceController::services_href();

Route::resource('services', ServiceController::class)
    ->only(['index']);

Route::get('services/{id}', [ServiceController::class, 'service'])->name('voir_service');

// Route::get('/user/{id}', function (Request $request, string $id) {
//     return 'User '.$id;
// });

// Route::resource('services/{id}', ServiceController::class)
//     ->only(['detail']);

// foreach ($services_href as $service_href) {
//     Route::resource("services/".$service_href->href, ServiceController::class)
//     ->only(['indexServices', 'show']);
// }
/**
 * Portfolio
 * 
 * */
Route::resource('portfolio', PortfolioController::class)
    ->only(['index']);

Route::resource('portfolio-details', PortfolioDetailController::class)
    ->only(['index']);

/**
 * Contact
 * 
 * */
// Route::get('contact', [ContactForm::class, 'render', 'submit']);
Route::get('mails', [ContactMail::class, 'index']);

Route::resource('contact', ContactController::class)
    ->only(['index']);

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('re', [ContactController::class, 're']);


/**
 * Dashboard
 * 
 * */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
