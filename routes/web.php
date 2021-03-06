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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'HomeController@index');
// Route::get('/form', 'RegistrasiController@index');
// Route::post('/welcome', 'RegistrasiController@store');

// Route::get('/master', function() {
//     return view('adminlte.master');
// });

// Route::get('/items', function() {
//     return view('items.index');
// });

// Route::get('/items/create', function() {
//     return view('items.create');
// });


//TUGAS LARAVEL 2
// Route::get('/', function() {
//     return view('adminlte.items.create');
// });

// Route::get('/data-tables', function() {
//     return view('adminlte.parsial.data');
// });

//TUGAS CRUD
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan', 'PertanyaanController@index'); 
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanCOntroller@destroy');
