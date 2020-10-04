<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'EmployeesController@index') -> name('emp-index');
Route::get('/emp/show/{id}', 'EmployeesController@show') -> name('emp-show');