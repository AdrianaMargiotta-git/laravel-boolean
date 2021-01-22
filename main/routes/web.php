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
    return view('welcome');
});

// /helloAll: saluta tutti gli utenti in inglese (statico, no variabili)
Route::get('/helloAll', function() {
    return view('english');
});

// /helloYou: saluta utente per nome (variabile) in inglese
Route::get('/helloYou', function() {
    return view('englishAll', 
        [
            'name' => 'Francesco'
        ]);
});

// /helloYou2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in inglese
Route::get('/helloYou2', function() {
    return view('englishAll', 
        [
            'name' => 'Federico'
        ]);
});