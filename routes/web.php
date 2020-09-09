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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/management', function () {
    return view('management.index');
});


Route::resource('/cashier', 'Cashier\CashierController');
Route::get('/cashier/createTableMenus/{name}', 'Cashier\CashierController@createTableMenus');
Route::get('cashier/singleTable/{id}', 'Cashier\CashierController@showSingleTable');

Route::post('/cashier/storeMenuTable/{id}', 'Cashier\CashierController@storeClientTable');
Route::get('/cashier/singleTable/{id}', 'Cashier\CashierController@showSingleTable');

Route::resource('/management/category', 'Management\CategoryController');
Route::resource('/management/client', 'Management\ClientController');

Route::get('/cashier/createClientMenus/{id}', 'Cashier\CashierController@createClientMenus');
Route::post('/cashier/storeClientMenus/{id}', 'Cashier\CashierController@storeClientMenus');


//Route::get('management/category/{category}/edit', 'Management\CategoryController@edit');

Route::resource('/management/menu', 'Management\MenuController');
Route::resource('/management/table', 'Management\TableController');
