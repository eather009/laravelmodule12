<?php

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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/buses', [App\Http\Controllers\BusController::class, 'index'])->name('bus.index');
    Route::get('/bus/add', [App\Http\Controllers\BusController::class, 'create'])->name('bus.add');
    Route::post('/bus/add', [App\Http\Controllers\BusController::class, 'store']);
    Route::get('/bus/{bus}/edit', [App\Http\Controllers\BusController::class, 'edit'])->name('bus.edit');
    Route::put('/bus/{bus}/edit', [App\Http\Controllers\BusController::class, 'update']);

    Route::get('/locations', [App\Http\Controllers\LocationController::class, 'index'])->name('location.index');
    Route::get('/location/add', [App\Http\Controllers\LocationController::class, 'create'])->name('location.add');
    Route::post('/location/add', [App\Http\Controllers\LocationController::class, 'store']);
    Route::get('/location/{location}/edit', [App\Http\Controllers\LocationController::class, 'edit'])->name('location.edit');
    Route::put('/location/{location}/edit', [App\Http\Controllers\LocationController::class, 'update']);

    Route::get('/trips', [App\Http\Controllers\HomeController::class, 'index'])->name('trip.index');
    Route::get('/trip/add', [App\Http\Controllers\HomeController::class, 'index'])->name('trip.add');
    Route::post('/trip/add', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/trip/{id}/edit', [App\Http\Controllers\HomeController::class, 'index'])->name('trip.edit');
    Route::put('/trip/{id}/edit', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/tickets', [App\Http\Controllers\HomeController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/add', [App\Http\Controllers\HomeController::class, 'index'])->name('ticket.add');
    Route::post('/ticket/add', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/ticket/sells', [App\Http\Controllers\HomeController::class, 'index'])->name('ticket.sells');
    Route::get('/ticket/sell', [App\Http\Controllers\HomeController::class, 'index'])->name('ticket.sell');
    Route::post('/ticket/sell', [App\Http\Controllers\HomeController::class, 'index']);

});

