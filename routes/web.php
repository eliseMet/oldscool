<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
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
})->name("home");

Route::name("user.")->prefix("user")->group(function () {
    //
    Route::get('/registration', [UserController::class, 'registration'])->name("registration");
    //Add a new user
    Route::post('/store', [UserController::class, 'store'])->name("store");
    //Get all default pictures
    Route::get('/default-profile-pictures', [ImageController::class, 'getDefaultPictures']);

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::name("image.")->prefix("image")->group(function () {
    //Print image
    Route::get('/{filename}', [ImageController::class, 'show']);
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
