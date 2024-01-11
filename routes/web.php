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
    return view('web.pages.home');
});

Route::get('/nousrejoindre', function () {
    return view('web.pages.page_nous_rejoindre');
});

Route::get('/inscription', function () {
    return view('web.pages.page_inscription');
});

Route::get('/connexion', function () {
    return view('web.pages.page_connexion');
});

Route::get('/accueil_connexion', function () {
    return view('web.pages.accueil_connexion');
});

Route::get('/activites', function () {
    return view('web.pages.activites');
});

Route::get('/test', function () {
    return view('web.pages.test');
});

Route::get('/pagePrincipale', function () {
    return view('web.pages.page_principale');
});

Route::get('/activites', 'ActivityController@index');
