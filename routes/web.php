<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PersonalOfficeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [IndexController::class, 'index'])->name('home.index');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

Route::get('/office', [PersonalOfficeController::class, 'index'])->name('office.index')->middleware('auth'); ;

Route::get('/catalog/{course}', [CourseController::class, 'show'])->name('course.show');

Route::get('like', [ReviewController::class, 'like'])->middleware('only.ajax');
Route::get('commentload', [ReviewController::class, 'load'])->middleware('only.ajax');
Route::get('commentsave', [ReviewController::class, 'save'])->middleware('only.ajax');


Auth::routes();

