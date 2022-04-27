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
    return view('guest.home'); //questo è il nome del file che riconosce, li cerca in resources.views
})->name('');

Route::get('/', function () {
    return view('guest.home'); //questo è il nome del file che riconosce, li cerca in resources.views
})->name('');

Route::get('/', function () {
    return view('guest.home'); //questo è il nome del file che riconosce, li cerca in resources.view
})->name('');
