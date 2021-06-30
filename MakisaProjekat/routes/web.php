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


Route::get('/onama', 'PagesController@about');
Route::get('/pocetna', 'PagesController@pocetnastr');
Route::get('/klubovi', 'PagesController@klubovi');
Route::get('/kontakt', 'PagesController@kontakt');
Route::resource('posts', 'PostsController');