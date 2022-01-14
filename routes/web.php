<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/company', 'CompanyController@index');
Route::post('company', 'CompanyController@store');
Route::get('/company/{id}', 'CompanyController@show');
Route::get('/company/edit/{id}', 'CompanyController@edit');
Route::get('/company/destroy/{id}', 'CompanyController@destroy');

Route::get('/employee', 'EmployeeController@index');
Route::post('employee', 'EmployeeController@store');
Route::get('/employee/{id}', 'EmployeeController@show');
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::get('/employee/destroy/{id}', 'EmployeeController@destroy');




