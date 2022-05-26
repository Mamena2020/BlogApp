<?php

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

// Route::prefix('auth')->group(function() {
//     Route::get('/', 'AuthController@index');
// });

use Illuminate\Support\Facades\Route;

// Route::group(['prefix' => 'auth', 'as'=>'auth.'], function () {
Route::group(['as'=>'auth.'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->name("login");
    Route::post('/login', 'LoginController@login')->name("login.attempt");
});
