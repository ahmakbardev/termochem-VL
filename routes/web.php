<?php

use App\Http\Controllers\AuthController;
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

// Routes for guests (unauthenticated users)
Route::middleware('guest')->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Routes for authenticated users
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('index');
    });
    Route::get('/materi', function () {
        return view('materi');
    })->name('materi');
    Route::get('/kompetensi', function () {
        return view('kompetensi');
    })->name('kompetensi');
    Route::get('/simulasi', function () {
        return view('simulasi.index');
    })->name('simulasi');

    Route::get('/percobaan-eksoterm', function () {
        return view('simulasi.eksoterm.trial-1');
    })->name('percobaan-eksoterm');
    Route::get('/percobaan-endoterm', function () {
        return view('simulasi.endoterm.trial-1');
    })->name('percobaan-endoterm');
    Route::get('/percobaan-kalorimeter', function () {
        return view('simulasi.kalorimeter.trial-1');
    })->name('percobaan-kalorimeter');
});
