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
    return view('layouts.home');
});
Route::get('/rs', function () {
    return view('mayapada');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/inputdata', function () {
    return view('input');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/home', function () {
    return view('layouts.master');
});
Route::get('/login1', function () {
    return view('login1');
});
