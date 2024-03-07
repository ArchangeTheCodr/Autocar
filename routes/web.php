<?php

use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\AuthController;
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
})->name('home');

// Route pour l'authentification de l'utilisateur
Route::prefix('/auth')->name('auth.')->controller(AuthController::class)->group( function () {

    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerUser')->name('registerUser');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginUser')->name('loginUser');
    Route::delete('/logout', 'logout')->name('logout');


});

// Routes du model Category
Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {
    
    Route::get('/','index')->name('index');
    Route::get('/{id}','show')->name('show')->where(['id' => '[0-9]+']);
    Route::get('/create','create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::patch('/edit/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');

});


// Routes du model Marque
Route::prefix('/marque')->name('marque.')->controller(MarqueController::class)->group(function () {
    
    Route::get('/','index')->name('index');
    Route::get('/{id}', 'show')->name('show')->where(['id' => '[0-9]+']);
    Route::get('/create','create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::patch('/edit/{id}','update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');

});


// Routes du model Vehicule
Route::prefix('/vehicule')->name('vehicule.')->controller(VehiculeController::class)->group(function () {
    
    Route::get('/','index')->name('index');
    Route::get('/{id}', 'show')->name('show')->where(['id' => '[0-9]+']);
    Route::get('/create','create')->name('create');
    Route::post('/create', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::patch('/edit/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'destroy')->name('destroy');


});

Route::controller(ReservationItemController::class)->name('reservationItem.')->group(function () {

    // Ajout du vehicule a la fiche de reservation
    Route::get('/vehicule/{id}/addToReservation', 'create')
        ->name('create')
        ->where(['id' => '[0-9]+']);
    
    Route::post('/vehicule/{id}/addToReservation', 'store')
        ->name('storeReservationItem')
        ->where(['id' => '[0-9]+']);

    Route::get('/vehicule/{vehiculeId}/updateReservation/{reservationItemId}', 'edit')
        ->name('edit')
        ->where(['vehiculeId' => '[0-9]+', 'reservationItemId' => '[0-9]+']);

    Route::patch('/vehicule/{vehiculeId}/updateReservation/{reservationItemId}', 'update')
        ->name('update')
        ->where(['vehiculeId' => '[0-9]+', 'reservationItemId' => '[0-9]+']);
     
    Route::delete('/vehicule/{vehiculeId}/removeFromReservation/{reservationItemId}', 'destroy')
        ->name('destroy')
        ->where(['vehiculeId' => '[0-9]+', 'reservationItemId' => '[0-9]+']);

});


// Routes pour la gestion de la reservation

Route::prefix('/reservation')->name('reservation.')->controller(ReservationController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/create/{reservation}', 'create')->name('create');
    Route::post('/create/{reservation}', 'store')->name('store');

});

// Route du model ReservationItem
