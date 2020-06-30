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

Route::get('/','produitController@create');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/Apropos', function () {
    return view('apropos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/p/{id}/{slug}', 'produitController@show');

Route::post('/postmachine','adminController@store');
Route::delete('/deletemachine/{id}','adminController@destroy');
Route::get('/update/{id}','adminController@edit');
Route::put('/modifie/{id}','adminController@update');



