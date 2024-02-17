<?php

use App\Http\Controllers\MarqueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VehiculeController;
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


// Routes du model Category
Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {
    
    Route::get('/','index')->name('index');
    Route::get('/{id}','show')->name('show')->where(['id' => '[0-9]+']);
    Route::get('/create','create')->name('create');
    Route::post('/create', 'store')->name('store');

});


// Routes du model Marque
Route::prefix('/marque')->name('marque.')->controller(MarqueController::class)->group(function () {
    
    Route::get('/','index')->name('index');
    Route::get('/{id}', 'show')->name('show')->where(['id' => '[0-9]+']);
    Route::get('/create','create')->name('create');
    Route::post('/create', 'store')->name('store');

});


// Routes du model Vehicule
Route::prefix('/vehicule')->name('vehicule.')->controller(VehiculeController::class)->group(function () {
    
    Route::get('/','index')->name('index');
    Route::get('/{id}', 'show')->name('show')->where(['id' => '[0-9]+']);
    Route::get('/create','create')->name('create');

});