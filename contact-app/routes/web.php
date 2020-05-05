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


// Route::middleware('auth')->group(function(){

    Route::get('/contacts','ContactController@index')->name('contacts.index');

    Route::get('/contacts/create','ContactController@create')->name('contacts.create');
    
    Route::get('/contacts/{id}','ContactController@show')->name('contacts.show');
    
    Route::post('/contacts','ContactController@store')->name('contacts.store');
    
    Route::get('/contacts/{contact}/edit','ContactController@edit')->name('contacts.edit');
    
    Route::patch('/contacts/{contact}','ContactController@update')->name('contacts.update');
    
    Route::delete('/contacts/{contact}','ContactController@destroy')->name('contacts.destroy');
    Auth::routes();
    
    Route::get('/dashboard', 'HomeController@index')->name('home');

// });
