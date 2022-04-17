<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\User\HomeController as UserHomeController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PersonalOfficeController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [IndexController::class, 'index'])->name('home.index');


Route::resource('courses', CourseController::class);


Route::get('/office', [PersonalOfficeController::class, 'index'])->name('office.index')->middleware('auth'); ;

Route::get('like', [ReviewController::class, 'like'])->middleware('auth' ,'only.ajax');
Route::resource('reviews', ReviewController::class);


Route::get('complaints/create', [ComplaintController::class, 'create'])->middleware('auth' ,'only.ajax');;


Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [HomeController::class, 'index']);
    Route::get('complaints' , [ComplaintController::class, 'adminComplaints'])->name('admin.complaints.index');
    
    Route::group(['prefix' => 'users'],function(){
        Route::get('/', UserHomeController::class)->name('admin.users.home');
        Route::get('/list', [UserController::class, 'users'])->name('admin.users.list');   
        Route::get('/list/teachers', [UserController::class, 'teachers'])->name('admin.teachers.list');   
    });

});



Auth::routes();

