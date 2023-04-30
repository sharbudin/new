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
    return view('welcome');
});


Route::get('/first', function () {
    return view('first_page');
});

Route::get('/second', function () {
    return view('second_page');
});

Route::get('/third', function () {
    return view('third_page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/laon', function () {
    return view('loan');
});
