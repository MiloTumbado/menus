<?php
use Illuminate\Support\Facades\Route;
Route::get('/', 'MenuController@inicio')->name('inicio');
Route::get('/asignaturas', 'MenuController@asignaturas')->name('asignaturas');
Route::get('/entregas', 'MenuController@entregas')->name('entregas');
