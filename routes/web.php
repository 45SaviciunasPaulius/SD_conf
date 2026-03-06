<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Main');
});

Route::get('/client/conferences', [ClientController::class, 'index']);
Route::get('/client/conferences/{id}', [ClientController::class, 'show']);