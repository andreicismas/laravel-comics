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


// Ciao ragazzi,

// esercizio di oggi:

// nome repo: laravel-comics

// Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.

// Oggi concentratevi sul layout:

// create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.

// Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.

// Bonus: Create più pagine istituzionali che condividono lo stesso layout

Route::get('/', function () {
    return view('welcome');
});
