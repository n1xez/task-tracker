<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'TaskController@index');

Route::resource('tasks', 'TaskController');

Route::resource('commons', 'CommonController');

