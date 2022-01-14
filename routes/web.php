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

Route::get('/', function () {
    return view('pages/homepage');
});

Route::get('/competitions', function () {
    return view('pages/competition/home');
});

Route::get('/sign-in', function () {
    return view('pages/auth/sign-in');
});

Route::get('/grand-event', function () {
    return view('pages/grand-event');
});
