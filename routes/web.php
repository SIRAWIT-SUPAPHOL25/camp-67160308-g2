<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});
Route::get('/view2', function () {
    return view('myview2');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

// Route::get('/flights', [App\Htpp\Controllers\FlightController::class, 'index']);
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/flights','FlightController@index');
    // Route::post('flight')
});
