<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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
Route::get('/header', function () {
    return view('frontend.layout.header');
});

Route::get('/footer', function () {
    return view('frontend.layout.footer');
});

Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/checkout', function () {
    return view('frontend.checkout');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/detail', function () {
    return view('frontend.detail');
});

//-------------------------------------------------------Admin Routes--------------------------------------------------------------------------------

Route::get('/admin_header', function () {
    return view('backend.layout.header');
});
Route::get('/admin_footer', function () {
    return view('backend.layout.footer');
});
Route::get('/404_error', function () {
    return view('backend.404_error');
});
Route::get('/contact', function () {
    return view('backend.contact');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/login', [adminController::class,'index']);
Route::post('/adminlogin', [adminController::class,'chk_login']);
Route::get('/logout', [adminController::class,'logout']);


Route::get('/profile', function () {
    return view('backend.profile');
});