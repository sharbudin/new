<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allcontroller;

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

Route::get('/first', [allcontroller::class,'ui_first'])->name('first');
Route::get('/second', [allcontroller::class,'ui_second'])->name('second');
Route::get('/third', [allcontroller::class,'ui_third'])->name('third');
Route::get('/dashboard', [allcontroller::class,'dash'])->name('dashboard');
Route::get('/laon', [allcontroller::class,'ui_loan'])->name('loan');

// Route::get('/first', function () {
//     return view('first_page');
// });

// Route::get('/second', function () {
//     return view('second_page');
// });

// Route::get('/third', function () {
//     return view('third_page');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/laon', function () {
//     return view('loan');
// });
