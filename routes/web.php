<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'TaskController@index');
Route::resource('tasks', 'TaskController');

