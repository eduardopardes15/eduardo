<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LugaresController;

Route::get('/', 'lugaresController@index')->name('lugares.index');
Route::get('/lugares/{lugar}', 'lugaresController@show')->name('lugares.show');
Route::get('/lugares/create', 'lugaresController@create')->name('lugares.create');
Route::post('/lugares', 'lugaresController@store')->name('lugares.store');
Route::get('/lugares/{lugar}/edit', 'lugaresController@edit')->name('lugares.edit');
Route::put('/lugares/{lugar}', 'lugaresController@update')->name('lugares.update');
Route::delete('/lugares/{lugar}', 'lugaresController@destroy')->name('lugares.destroy');

Route::get('/', function () {
    return view('index');
});
