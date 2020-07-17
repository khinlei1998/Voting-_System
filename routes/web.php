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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/product', 'ProductController')->middleware('auth');
Route::resource('/vote', 'VoterController');
Route::resource('/result', 'ResultController');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/pagination', 'ProductController@fetch');




Route::get('/home', 'HomeController@index')->name('home');
