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
    $data = [
        "links" => [
            "pagina" => "pagina",
            "contatti" => "contatti",
            "info" => "info",
        ],
    ];
    return view('home',$data);
});

Route::get('/contatti', function () {
    $contact = [
        "names" => ["ciao","a","tutti","quanti"]
    ];
    return view('contatti',$contact);
})->name('contact');

Route::get('/info', function () {
    return view('info',);
})->name('infos');

Route::get('/pagina', function () {
    return view('pagina',);
})->name('pagine');
