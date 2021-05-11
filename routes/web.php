<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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
Route::namespace('App\Http\Controllers')->group(function () {
    Auth::routes();
    
});

Route::get('/', function () {
    return view('header');
});





Auth::routes();
Route::get('/header','HeaderController@index');
Route::get('/about','AboutController@index');
Route::get('/contact','ContactController@index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login','LoginController@index');



