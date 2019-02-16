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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->namespace('Auth')->prefix('user')->name('auth.')->group(function () {
    Route::get('show', 'ShowController')->name('show');

    Route::get('edit/{id}', 'EditController@edit')->name('edit');

    Route::post('update', 'EditController@update')->name('update');

    Route::get('create', 'CreateController@create')->name('create');

    Route::post('insert', 'CreateController@insert')->name('insert');
});


Route::middleware('auth')->namespace('Ticket')->name('ticket.')->prefix('tickets')->group(function () {
    Route::get('create', 'CreateController@create')->name('create');

    Route::post('insert', 'CreateController@insert')->name('insert');

    Route::get('edit/{id}', 'EditController@edit')->name('edit');

    Route::post('tickets/update', 'EditController@update')->name('update');

    Route::get('response', function () {
        return (view('tickets.response'));
    })->name('response');

    Route::get('show', 'ShowController')->name('show');
});
