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

// Route::get('/', 'HomeController@index');
// Route::get('/form', 'RegistrasiController@index');
// Route::post('/welcome', 'RegistrasiController@store');

Route::get('/master', function() {
    return view('adminlte.master');
});

Route::get('/items', function() {
    return view('items.index');
});

// Route::get('/items/create', function() {
//     return view('items.create');
// });


//TUGAS LARAVEL 2
Route::get('/', function() {
    return view('adminlte.items.create');
});

Route::get('/data-tables', function() {
    return view('adminlte.parsial.data');
});

//TUGAS CRUD
Route::get('/post/create', 'PostController@create');

Route::post('/post', 'PostController@store');

Route::get('/post/create', 'PostController@index');

Route::get('/post/{id}','PostController@show');

Route::get('/post/{id}/edit','PostController@edit');

Route::put('/post/{id}','PostController@update');

Route::delete('/post/{id}','PostController@destroy');