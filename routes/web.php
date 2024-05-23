<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// |--------------------------------------------------------------------------
//  HOME
// |--------------------------------------------------------------------------
Route::get('/', function () {
    return view('home');
})->name('home');

// |--------------------------------------------------------------------------
//  DATA DEI COMICS
// |--------------------------------------------------------------------------
Route::get('/comics', function () {
    $comicsArray = config('comics');

    $data = [
        'comics' => $comicsArray
    ];

    return view('comics', $data);
})->name('comics');

