<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\User\HomeController as UserHomeController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PersonalOfficeController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [IndexController::class, 'index'])->name('home.index');

Route::resource('courses', CourseController::class);


Route::get('/office', [PersonalOfficeController::class, 'index'])->name('office.index')->middleware('auth'); ;



Route::get('like', [ReviewController::class, 'like'])->middleware('auth' ,'only.ajax');
Route::get('commentload', [ReviewController::class, 'load'])->middleware('only.ajax');
Route::get('commentsave', [ReviewController::class, 'save'])->middleware('auth', 'only.ajax');
Route::get('commentcomplaint', [ReviewController::class, 'complaints'])->middleware('auth', 'only.ajax');


Route::group(['prefix' => 'admin'], function (){

    Route::get('/', [HomeController::class, 'index']);

        
    Route::group(['prefix' => 'users'],function(){
        Route::get('/', UserHomeController::class)->name('admin.users.home');
        Route::get('/complaints', [UserController::class, 'complaints'])->name('admin.complaints.list');
        Route::get('/complaints/{complaint}', [UserController::class, 'delete'])->name('admin.complaints.delete');

        Route::get('/list', [UserController::class, 'users'])->name('admin.users.list');   
        Route::get('/list/teachers', [UserController::class, 'teachers'])->name('admin.teachers.list');   
        
    });


});

Auth::routes();

