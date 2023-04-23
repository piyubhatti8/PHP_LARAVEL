<?php

use App\Http\Controllers\adminsController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\countrieController;

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
 Route::group(['middleware'=>['beforelogin']],function(){
    Route::get('/admin_login',[adminsController::class,'login']);
	Route::post('/admin_login',[adminsController::class,'logincheck']);
   
});
Route::group(['middleware'=>['afterlogin']],function(){
   
    Route::get('/logout',[adminsController::class,'adminlogout']);   
    Route::get('/manage_users',[adminsController::class,'manage_users']);   
    Route::get('/contact', function () {
        return view('backend.contact');
    });
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    });
    Route::get('/profile', function () {
        return view('backend.profile');
    });
    Route::get('/tables', function () {
        return view('backend.tables');
    });

});



Route::get('/admin_header', function () {
    return view('backend.layout.header');
});
Route::get('/admin_footer', function () {
    return view('backend.layout.footer');
});
Route::get('/404_error', function () {
    return view('backend.404_error');
});




//---------------------------------------------------Frontend Routes--------------------------------------------------------------------------------



Route::get('/signup_user',[userController::class,'fetch_cid']);
Route::post('/signup_user',[userController::class,'register']);
Route::get('/user_login',[userController::class,'user_login']);
Route::post('/user_login',[userController::class,'chk_user']);