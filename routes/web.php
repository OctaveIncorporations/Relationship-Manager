<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RelationshipManagerController;

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
    return view('homepage');
});

Route::controller(RelationshipManagerController::class)->group(function () {
    Route::get('/manager/login', 'showLoginForm')->name('relationship-manager.sign-in');
    Route::get('/manager/register', 'showRegisterForm')->name('relationship-manager.registration');
    Route::post('/manager/login', 'Login')->name('relationship-manager.login');
    Route::post('/manager/register', 'register')->name('relationship-manager.register');
});

// Clients Routes

Route::group(['middleware' => 'auth', 'prefix' => 'client'], function () {
    Route::controller(ClientController::class)->group(function () {
        Route::get('/profile', 'show')->name('client.profile');
    });
});


// Relationship Manager Routes

Route::group(['middleware' => 'relationship-manager', 'prefix' => 'relationship-manager'], function () {
    Route::controller(RelationshipManagerController::class)->group(function () {
        Route::get('/profile', 'show')->name('relationship-manager.profile');
        Route::post('/logout', 'managerLogout')->name('relationship-manager.logout');

    });
});