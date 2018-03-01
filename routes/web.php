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

Route::get('/' , 'PagesController@home')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@store')->name('contact.store');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');
Route::get('/Signin', 'PagesController@Signin')->name('Signin');
Route::get('/SignUp', 'PagesController@SignUp')->name('SignUp');
Route::get('/ViewMessages', 'PagesController@ViewMessages')->name('ViewMessages');
Route::get('/Message', 'PagesController@Message')->name('Message');
Route::get('/Message1', 'PagesController@Message1')->name('Message1');
