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

// Get Routes
Route::get('/books', 'BookController@display');
Route::get('/books/create', 'BookController@create');
Route::get('/books/{id}', 'BookController@show');
Route::get('/books/{id}/edit', 'BookController@edit');
Route::get('/books/{id}/delete', 'BookController@delete');

// Post Routes
Route::post('/books/new', 'BookController@store');
Route::post('/books/{id}/update', 'BookController@update');
