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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manager', function() {
    return 'you are manager';
})->middleware(['auth', 'auth.manager']);

Route::namespace('Manager')->prefix('manager')->middleware('auth', 'auth.manager')->name('manager.')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});