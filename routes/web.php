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

Route::get('/f', function () {
    return view('categories');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/d', function () {
    return view('items');
});
Route::resource('/categories', 'CategoriesController');

Route::resource('/items', 'ItemsController');

Route::resource('/customers', 'CustomersController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
