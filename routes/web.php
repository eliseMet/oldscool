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
// Route to unconnected users
Route::middleware('guest')->get('/', function () {
    return view('web.pages.home');
})->name("home");

// Route to connected users
Route::middleware('auth')->get('/profile', function () {
    return view('web.pages.homeProfile');
})->name("homeProfile");

Route::name("user.")->prefix("user")->group(function () {
    //Registration page
    Route::get('/registration', [UserController::class, 'registration'])->name("registration");
    //Connection page
    Route::get('/connection', [UserController::class, 'connection'])->name("connection");
    //Add a new user
    Route::post('/store', [UserController::class, 'store'])->name("store");
    //Authenticate a user
    Route::post('/authenticate', [UserController::class, 'authenticate'])->name("authenticate");
    //Get all default pictures
    Route::get('/default-profile-pictures', [ImageController::class, 'getDefaultPictures']);
    //Get profile page
    Route::get('/edit', [UserController::class, 'edit'])->name("edit");

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::name("image.")->prefix("image")->group(function () {
    //Print image
    Route::get('/{filename}', [ImageController::class, 'show']);
});

Route::get('/confidentialite', function () {
    return view('web.pages.confidentialite');
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
