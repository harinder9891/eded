<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;

Route::group(['as' => 'admin.','prefix' => 'admin','middleware' => ['auth','admin']], function () {
    // Route::group(['middleware' => 'role:'.config('boilerplate.access.role.admin')], function () {

    // });


    Route::get('/',[DashboardController::class,'index']);



    Route::resource('products',ProductController::class)->except(['show']);
    Route::get('/enquiries',[ProductController::class,'enquiry']);

    Route::post('/delete-enquiries',[ProductController::class,'deleteBulkEnquiries']);

});
