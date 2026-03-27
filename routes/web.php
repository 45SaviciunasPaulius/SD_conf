<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return redirect()->route('register');
})->name('home');


require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

Route::get('/dashboard', [AuthenticatedSessionController::class, 'redirectToDashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/client/conferences', [ClientController::class, 'index'])->name('client.conferences.index')->middleware('role:client');
Route::get('/client/conferences/{id}', [ClientController::class, 'show'])->name('client.conferences.show')->middleware('role:client');
Route::post('/client/conferences/{id}/register', [ClientController::class, 'store'])->name('client.conferences.register')->middleware('role:client');

Route::get('/employee/conferences', [EmployeeController::class, 'index'])->name('employee.conferences.index')->middleware('role:employee');
Route::get('/employee/conferences/{id}', [EmployeeController::class, 'show'])->name('employee.conferences.show')->middleware('role:employee');

Route::get('/admin', function () {
    return Inertia::render('Admin/Index');
})->name('admin.index')->middleware('role:admin');

Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users.index')->middleware('role:admin');
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit'])->name('admin.users.edit')->middleware('role:admin');
Route::put('/admin/users/{id}', [UsersController::class, 'update'])->name('admin.users.update')->middleware('role:admin');

Route::get('/admin/conferences', [ConferenceController::class, 'index'])->name('admin.conferences.index')->middleware('role:admin');
Route::get('/admin/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('admin.conferences.edit')->middleware('role:admin');
Route::put('/admin/conferences/{id}', [ConferenceController::class, 'update'])->name('admin.conferences.update')->middleware('role:admin');
Route::delete('/admin/conferences/{id}', [ConferenceController::class, 'destroy'])->name('admin.conferences.destroy')->middleware('role:admin');

Route::get('/admin/conferences/create', [ConferenceController::class, 'create'])->name('admin.conferences.create')->middleware('role:admin');
Route::post('/admin/conferences', [ConferenceController::class, 'store'])->name('admin.conferences.store')->middleware('role:admin');
});
