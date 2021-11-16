<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create', [App\Http\Controllers\ClientController::class, 'create']);
