<?php

use App\Http\Controllers\imagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminsController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\categoriesController;

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
//------------------------------------------------------------Frontend Routes-----------------------------------------------------------------------

Route::get('/header/{data}',[categoriesController::class,'header']);


Route::get('/index',[categoriesController::class,'index']);

Route::post('/gallery',[imagesController::class,'gallery']);

Route::get('/cat_wise_images/{data}',[categoriesController::class,'category']);
Route::get('/cat_wise_images',[imagesController::class,'cat_wise_images']);

Route::get('/cat_wise_images/{data}',[imagesController::class,'cat_wise_images']);




Route::get('/user_register',[usersController::class,'user_register']);

Route::post('/user_register',[usersController::class,'store']);

Route::get('/user_login',[usersController::class,'user_login']);
Route::post('/user_login',[usersController::class,'logincheck']);
Route::get('/user_logout',[usersController::class,'logout']);

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/header', function () {
    return view('frontend.layout.header');
});





//------------------------------------------------------------Backend Routes-----------------------------------------------------------------------


Route::get('/admin_register', function () {
    return view('backend.admin_register');
});

Route::get('/form', function () {
    return view('backend.form');
});

Route::get('/add_images',[imagesController::class,'add_images']);

Route::post('/add_images',[imagesController::class,'insert_images']);


Route::get('/admin_index',[adminsController::class,'admin_index']);


Route::get('/manage_users',[usersController::class,'users_data']);
Route::post('/manage_users',[usersController::class,'users_data']);

Route::get('/admin_login',[adminsController::class,'admin_login']);
Route::post('/admin_login',[adminsController::class,'logincheck']);
Route::get('/admin_logout',[adminsController::class,'logout']);