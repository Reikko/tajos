<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('import', 'ImportController@import');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('avance','AvanceControl');
Route::resource('ingreso','IngresoControl');
Route::resource('prototipo','PrototipoControl');
