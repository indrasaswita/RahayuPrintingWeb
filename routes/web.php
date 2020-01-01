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

Route::get('', 'UserloginController@index');
Route::get('login', 'UserloginController@index');

Route::get('dashboard', 'HomeController@dashboard');

Route::get('kost', "AdmKostController@index");
Route::resource('order', 'OrderController');
Route::get('removeCart', 'OrderController@removeAllCart');




Route::post('AJAX/login', 'UserloginController@login');
Route::get('AJAX/kost/salesheader/{roomid}/getlast', 'KostSalesAJAX@getlastbyroom');
Route::post('AJAX/kost/salesheader/{roomid}/addnew', 'KostSalesAJAX@addnew');