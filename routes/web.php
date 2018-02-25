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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', function () {
    $data= request()->all();
    dd($data);
});
Route::get('/Signin', function () {
    return view('pages.Signin');
});
Route::post('/Signin', function () {
    $data1= request()->all();
    dd($data1);
});
Route::get('/SignUp', function () {
    return view('pages.SignUp');
});
Route::post('/SignUp', function () {
    $data2= request()->all();
    dd($data2);
});
Route::get('/ViewMessages', function () {
    return view('pages.ViewMessages');
});
Route::post('/ViewMessages', function () {
    $data2 = request()->all();
    dd($data2);
});
Route::get('/Message', function () {
    return view('pages.Message');
});
