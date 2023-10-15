<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontController::class, 'index'])->name('front.home');
Route::get('/about',[FrontController::class, 'about'])->name('front.about');
Route::get('/contact',[FrontController::class, 'contact'])->name('front.contact');
Route::get('/courses',[FrontController::class, 'courses'])->name('front.courses');


// ********** Admin Routes *************
Route::get('/login',[AuthController::class,'loadLogin'])->name('admin.login');
Route::post('/authenticate',[AuthController::class,'authenticate'])->name('admin.authenticate');
Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');



// ********** Super Admin Role Routes *************
Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('dashboard',[SuperAdminController::class,'index']);
});


// ********** Admin Role Routes *************
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('dashboard',[AdminController::class,'index']);
});


// ********** Manager Routes *************

