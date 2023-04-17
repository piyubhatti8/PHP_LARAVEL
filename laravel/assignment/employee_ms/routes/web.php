<?php

use App\Http\Controllers\adminsController;
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
Route::get('/profile', function () {
    return view('backend.profile');
});

Route::get('admin_login',[adminsController::class,'login']);
Route::post('/admin_login',[adminsController::class,'chk_login']);





//Route::post('/signup',[adminsController::class,'signup']);
