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
})->name('home');

Route::get('/header', function () {
    return view('guest.partials.header'); //questo è il nome del file che riconosce, li cerca in resources.views
})->name('header');

Route::get('/main', function () {
    return view('guest.partials.main'); //questo è il nome del file che riconosce, li cerca in resources.views
})->name('main');

Route::get('/footer', function () {
    return view('guest.partials.footer'); //questo è il nome del file che riconosce, li cerca in resources.views
})->name('footer');

