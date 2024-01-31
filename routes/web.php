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

Route::get('/inscription', function () {
    return view('web.pages.inscription');
});

Route::get('/connection', function () {
    return view('web.pages.connection');
});

Route::get('/activities', function () {
    return view('web.pages.activities');
});

Route::get('/newActivity', function () {
    return view('web.pages.newActivity');
});

Route::get('/test', function () {
    return view('web.pages.test');
});

Route::get('/activites', 'ActivityController@index');
