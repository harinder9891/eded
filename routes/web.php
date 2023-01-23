<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'index']);
Route::get('products/{slug?}', [App\Http\Controllers\Frontend\IndexController::class, 'products']);
Route::get('contact-us', [App\Http\Controllers\Frontend\IndexController::class, 'contactUs']);
Route::get('enquiry/{slug?}', [App\Http\Controllers\Frontend\IndexController::class, 'enquiry']);



require __DIR__.'/admin.php';

require __DIR__.'/user.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
