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

Route::get('/UserController@index', function () {
    return view('VFi');
});

//Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
Route::view('/', 'VFi');

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/writer', 'writer');

Route::get('/writer', 'EditorController@index');
Route::get('/edit/{id}',"EditorController@edit") ;
Route::get('/show/{id}',"EditorController@show") ;
Route::post('/update/{id}',"EditorController@update") ;


Route::get('/admin', 'AdminController@index');
Route::get('/edit/{id}',"AdminController@edit") ;
Route::get('/show/{id}',"AdminController@show") ;
Route::post('/update/{id}',"AdminController@update") ;
Route::get('/export', 'AdminController@export')->name('export');

Route::get('vfis', 'UserController@statusindex');
Route::get('changeStatus', 'UserController@changeStatus')->name('changeStatus');


Route::get('contact', 'EditorController@showContactForm')->name('contact.show');
Route::post('contact', 'EditorController@submitContactForm')->name('contact.submit');

//Route::get('/',"VfiController@index") ;

Route::get('/home', 'UserController@index');
Route::get('/create',"UserController@create") ;
Route::post('/store',"UserController@store") ;



//status check




  