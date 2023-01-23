<?php

use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\CategoryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/cache-clear', function() {
	Artisan::call('config:cache');
	Artisan::call('config:clear');
	Artisan::call('cache:clear');
	return "Cache is cleared";
});

Route::get('/courses/{slug}',[CourseController::class,'courseBySlug']);

Route::get('/categories',[CategoryController::class,'categories']);

Route::post('/enquiry',[CourseController::class,'submitEnquiry']);

Route::post('/contact',[CourseController::class,'submitContact']);

Route::get('/reload-captcha', [CourseController::class, 'reloadCaptcha']);

Route::get('/category/{slug}',[CategoryController::class,'categoryBySlug']);
