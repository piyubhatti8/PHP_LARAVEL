<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\countrieController;
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

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/add_to_wishlist', function () {
    return view('frontend.add_to_wishlist');
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
Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/men', function () {
    return view('frontend.men');
});
Route::get('/order_complete', function () {
    return view('frontend.order_complete');
});
Route::get('/product_detail', function () {
    return view('frontend.product_detail');
});
Route::get('/women', function () {
    return view('frontend.women');
});

Route::get('/signup_user',[userController::class,'fetch_cid']);
Route::post('/signup_user',[userController::class,'register']);
Route::get('/user_login',[userController::class,'user_login']);
Route::post('/user_login',[userController::class,'chk_user']);
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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/admin_index', [adminController::class,'admin_index']);

Route::post('/adminlogin', [adminController::class,'chk_login']);

Route::get('/logout', [adminController::class,'logout']);


Route::get('/profile', function () {
    return view('backend.profile');
});