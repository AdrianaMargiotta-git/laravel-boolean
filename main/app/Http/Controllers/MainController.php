<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // /holaTodo: saluta tutti gli utenti in spagnolo
   public function hola() {
       return view('spanishAll');
   }

    // /holaTu: saluta utente per nome (variabile) in spagnolo
   public function hola1() {
        return view('spanish',
        [
            'nombre' => 'Francesco',
        ]);
    }
    
    // /holaTu2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in spagnolo
    public function hola2() {
        return view('spanish',
        [
            'nombre' => 'Federico',
        ]);
    }
}
