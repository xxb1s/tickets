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


Route::get('users/show', function () {
    return view('usuarios.usuarios');
});

Route::get('user/edit', function () {
    return view('auth.edit');
});

Route::get('user/create', function () {
    return view('auth.create');
});



Route::get('tickets/create', function () {
    return view('tickets.create');
})->name('create_ticket');

Route::get('tickets/editar', function (){
    return view('tickets.editar');
})->name('edit_ticket');

Route::post('tickets/editar', 'TicketController@edit')->name('edit.ticket');

Route::get('tickets/responder',function(){
    return(view('tickets.responder'));
})->name('response_ticket');

Route::get('tickets/tickets', function () {
    return view('tickets.tickets');
})->name('see_tickets');
