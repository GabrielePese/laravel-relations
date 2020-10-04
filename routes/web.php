<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'EmployeesController@index') -> name('emp-index');
Route::get('/emp/show/{id}', 'EmployeesController@show') -> name('emp-show');
Route::get('/emp/create',  'EmployeesController@create') ->name('emp-create');
Route::post('/emp/create',  'EmployeesController@store') ->name ('emp-store');
Route::get('/emp/delete/{id}', 'EmployeesController@destroy') -> name('emp-delete');