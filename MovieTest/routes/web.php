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

Route::get('/', 'GuestController@welcome')
    -> name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('create/movie', 'HomeController@create')
    -> name('create');
Route::post('store/movie', 'HomeController@store')
    -> name('store');