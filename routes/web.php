<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Main');
});

Route::get('/client/conferences', [ClientController::class, 'index']);
Route::get('/client/conferences/{id}', [ClientController::class, 'show']);
Route::post('/client/conferences/{id}/register', [ClientController::class, 'store']);

Route::get('/employee/conferences', [EmployeeController::class, 'index']);
Route::get('/employee/conferences/{id}', [EmployeeController::class, 'show']);


Route::get('/admin', function () {
    return Inertia::render('Admin/Index');
});

Route::get('/admin/users', [UsersController::class, 'index']);
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit']);
Route::put('/admin/users/{id}', [UsersController::class, 'update']);

Route::get('/admin/conferences', [ConferenceController::class, 'index']);
Route::get('/admin/conferences/{id}/edit', [ConferenceController::class, 'edit']);
Route::put('/admin/conferences/{id}', [ConferenceController::class, 'update']);
Route::delete('/admin/conferences/{id}', [ConferenceController::class, 'destroy']);

Route::get('/admin/conferences/create', [ConferenceController::class, 'create']);
Route::post('/admin/conferences', [ConferenceController::class, 'store']);


