<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Main');
})->name('home');

Route::get('/client/conferences', [ClientController::class, 'index'])->name('client.conferences.index');
Route::get('/client/conferences/{id}', [ClientController::class, 'show'])->name('client.conferences.show');
Route::post('/client/conferences/{id}/register', [ClientController::class, 'store'])->name('client.conferences.register');

Route::get('/employee/conferences', [EmployeeController::class, 'index'])->name('employee.conferences.index');
Route::get('/employee/conferences/{id}', [EmployeeController::class, 'show'])->name('employee.conferences.show');

Route::get('/admin', function () {
    return Inertia::render('Admin/Index');
})->name('admin.index');

Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{id}', [UsersController::class, 'update'])->name('admin.users.update');

Route::get('/admin/conferences', [ConferenceController::class, 'index'])->name('admin.conferences.index');
Route::get('/admin/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('admin.conferences.edit');
Route::put('/admin/conferences/{id}', [ConferenceController::class, 'update'])->name('admin.conferences.update');
Route::delete('/admin/conferences/{id}', [ConferenceController::class, 'destroy'])->name('admin.conferences.destroy');

Route::get('/admin/conferences/create', [ConferenceController::class, 'create'])->name('admin.conferences.create');
Route::post('/admin/conferences', [ConferenceController::class, 'store'])->name('admin.conferences.store');


