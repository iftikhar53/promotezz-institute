<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TempImagesController;
use App\Http\Controllers\TrainerController;
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
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

    //*** Course Routes ***/
    Route::get('/courses',[CourseController::class,'index'])->name('admin.courses.index');
    Route::get('/courses/create',[CourseController::class,'create'])->name('admin.courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
    Route::put('/courses/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('admin.courses.delete');

    //*** Trainers Routes ***/
    Route::get('/trainers',[TrainerController::class,'index'])->name('admin.trainers.index');
    Route::get('/trainers/create',[TrainerController::class,'create'])->name('admin.trainers.create');
    Route::post('/trainers', [TrainerController::class, 'store'])->name('admin.trainers.store');
    Route::get('/trainers/{trainer}/edit', [TrainerController::class, 'edit'])->name('admin.trainers.edit');
    Route::put('/trainers/{trainer}', [TrainerController::class, 'update'])->name('admin.trainers.update');
    Route::delete('/trainers/{trainer}', [TrainerController::class, 'destroy'])->name('admin.trainers.delete');

    //*** Contact Leads Routes ***/
    Route::get('/leads',[LeadsController::class,'index'])->name('admin.leads.index');

    //*** Students Routes ***/
    Route::get('/students',[StudentController::class,'index'])->name('admin.students.index');
    Route::get('/students/create',[StudentController::class,'create'])->name('admin.students.create');


    //temp-images.create
    Route::post('/upload-temp-image', [TempImagesController::class, 'create'])->name('temp-images.create');

});


// ********** Manager Routes *************

