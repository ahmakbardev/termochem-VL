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
    return view('index');
});
Route::get('/kompetensi', function () {
    return view('kompetensi');
})->name('kompetensi');
Route::get('/simulasi', function () {
    return view('simulasi.index');
})->name('simulasi');

Route::get('/percobaan', function () {
    return view('simulasi.eksoterm.trial-1');
})->name('percobaan');
