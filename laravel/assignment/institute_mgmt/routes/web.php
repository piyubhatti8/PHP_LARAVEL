<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin_index', function () {
    return view('backend.index');
});
Route::get('/admin_login', function () {
    return view('backend.login');
});
Route::get('/form', function () {
    return view('backend.form');
});
Route::get('/admin_register', function () {
    return view('backend.register');
});
Route::get('/table', function () {
    return view('backend.table');
});
Route::get('/admin_forgoetpass', function () {
    return view('backend.forget-pass');
});
Route::get('/admin_index', function () {
    return view('backend.index');
});