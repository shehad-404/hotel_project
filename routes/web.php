<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {

// Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// route::get('/', function()
// {
//     return view('home.index');
// });

route::get('/', [AdminController::class, 'home']);

route::get('/home', [AdminController::class, 'index'])->name('home');
// route::get('/admin', [AdminController::class, 'index']);
