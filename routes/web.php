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

// Route::get('/', function () {
//     return view('frontend.fro_product');
// });
// Route::resource('vote', 'VoterController');
Route::resource('/','VoterController');
Route::get('/error',function(){
    return view('frontend.permission');
});
Route::resource('/product', 'ProductController')->middleware('is_admin');
Route::get('/vote', 'VoterController@store')->middleware('auth');
Route::resource('/result', 'ResultController')->middleware('is_admin');;
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/custom','\App\Http\Controllers\Auth\LoginController@custom')->name('home');

