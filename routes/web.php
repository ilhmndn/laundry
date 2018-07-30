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

Route::get('/', 'getrootController@goToroot');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{id}/edit', 'HomeController@edit');
Route::put('/home/{id}', 'HomeController@update');
Route::get('/invo/{invo}', 'TransactionController@invoice');
Route::get('/pdf', 'pdfController@index');

// Customer
Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::get('/customer/{id_pel}', 'CustomerController@show');
Route::get('/customer/{id_pel}/edit', 'CustomerController@edit');
Route::put('/customer/{id_pel}', 'CustomerController@update');
Route::post('/customer', 'CustomerController@store');
Route::delete('/customer/{id_pel}', 'CustomerController@destroy');

Route::group(['middleware' => 'admin'], function() {
  // Type
  Route::get('/type', 'TypeController@index');
  Route::get('/type/create', 'TypeController@create');
  Route::post('/type', 'TypeController@store');
  Route::get('/type/{kd_jenis}', 'TypeController@show');
  Route::get('/type/{kd_jenis}/edit', 'TypeController@edit');
  Route::put('/type/{kd_jenis}', 'TypeController@update');
  Route::delete('/type/{id_pel}', 'TypeController@destroy');
  // laporan
  Route::get('/laporan', 'LaporanController@index')->name('laporan');
  Route::post('/laporan/pdf','LaporanController@fun_pdf')->name('pdf');
  // Kelola User
  Route::get('/home/create', 'HomeController@create');
  Route::post('/home', 'HomeController@store');

});
// Reception
Route::get('/reception', 'ReceptionController@index');
Route::get('/reception/create',array('as'=>'create','uses'=>'ReceptionController@create'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'ReceptionController@autocomplete'));
Route::get('autocomplete2',array('as'=>'autocomplete2','uses'=>'ReceptionController@autocomplete2'));
Route::post('/reception', 'ReceptionController@store');
Route::get('/reception/{no_order}', 'ReceptionController@show');
Route::get('/reception/{no_order}/edit', 'ReceptionController@edit');
Route::put('/reception/{no_order}', 'ReceptionController@update');
Route::delete('/reception/{no_order}', 'ReceptionController@destroy');

// Transaction
Route::get('/transaction', 'TransactionController@index');
Route::get('/transaction/create',array('as'=>'create','uses'=>'TransactionController@create'));
Route::get('autocomplete3',array('as'=>'autocomplete3','uses'=>'TransactionController@autocomplete3'));
Route::post('/transaction', 'TransactionController@store');
Route::delete('/transaction/{no_trans}', 'TransactionController@destroy');


Route::get('/chart', 'ChartController@chart');
