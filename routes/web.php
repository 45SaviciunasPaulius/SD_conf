<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Main');
});

Route::get('/client/conferences', [ClientController::class, 'index']);
Route::get('/client/conferences/{id}', [ClientController::class, 'show']);

Route::get('/employee/conferences', [EmployeeController::class, 'index']);
Route::get('/employee/conferences/{id}', [EmployeeController::class, 'show']);