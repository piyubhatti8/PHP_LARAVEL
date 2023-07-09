<?php

use App\Http\Controllers\teacherController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\adminController;
 use App\Http\Controllers\bookController;
 use App\Http\Controllers\countrieController;
 use App\Http\Controllers\authorController;
 use App\Http\Controllers\publisherController;
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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/admin_login',[adminController::class,'admin_login']);
Route::post('admin_login',[adminController::class,'chk_admin']);

Route::get('/admin_logout',[adminController::class,'admin_logout']);
Route::get('/forgot_pass',[adminController::class,'forgot_pass']);
Route::post('/otp_forgot_pass',[adminController::class,'otp_forgot_pass']);
Route::get('/change_pass',[adminController::class,'change_pass']);

Route::post('/change_pass/{id,rnum}',[adminController::class,'pwd_change']);

Route::post('/update_pass/{id}',[adminController::class,'update_pass']);

Route::get('/add_teachers',[teacherController::class,'add_teachers']);
Route::post('/add_teachers',[teacherController::class,'store']);

Route::get('/manage_teachers',[teacherController::class,'show']);
Route::get('/edit_teacher/{id}',[teacherController::class,'edit_teacher']);

Route::post('/update_teacher/{id}',[teacherController::class,'update']);

Route::get('/delete_teacher/{id}',[teacherController::class,'destroy']);

Route::get('/add_authors',[authorController::class,'add_authors']);
Route::post('/add_authors',[authorController::class,'store']);

Route::get('/manage_authors',[authorController::class,'manage_authors']);
Route::get('/edit_author/{id}',[authorController::class,'edit']);
Route::post('/update_author/{id}',[authorController::class,'update']);

Route::get('/delete_author/{id}',[authorController::class,'destroy']);


Route::get('/add_publishers',[publisherController::class,'add_publishers']);
Route::post('/add_publishers',[publisherController::class,'store']);

Route::get('/manage_publishers',[publisherController::class,'manage_publishers']);

Route::get('/edit_publisher/{id}',[publisherController::class,'edit']);
Route::post('/update_publisher/{id}',[publisherController::class,'update']);

Route::get('/delete_publisher/{id}',[publisherController::class,'destroy']);

Route::get('/add_books',[bookController::class,'add_books']);
Route::post('/add_books',[bookController::class,'store']);
Route::get('/manage_books',[bookController::class,'manage_books']);
Route::get('/edit_book/{id}',[bookController::class,'edit_book']);
Route::post('/update_book/{id}',[bookController::class,'update_book']);
Route::get('/delete_book/{id}',[bookController::class,'destroy']);








