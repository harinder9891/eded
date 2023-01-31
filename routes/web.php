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
Route::get('/portfolio', [App\Http\Controllers\Frontend\IndexController::class, 'portfolio']);
Route::get('/web-d', [App\Http\Controllers\Frontend\IndexController::class, 'webpage']);
Route::get('/bussiness-consultation-services', [App\Http\Controllers\Frontend\IndexController::class, 'bc']);
Route::get('/digital-marketing-services', [App\Http\Controllers\Frontend\IndexController::class, 'digitmarket']);
Route::get('/who-we-are', [App\Http\Controllers\Frontend\IndexController::class, 'whoweare']);
Route::get('/mobile-app-development-services', [App\Http\Controllers\Frontend\IndexController::class, 'mobappdev']);
Route::get('/e-commerce-services', [App\Http\Controllers\Frontend\IndexController::class, 'ecommserv']);
Route::get('/ui-and-ux-design-services', [App\Http\Controllers\Frontend\IndexController::class, 'uiux']);
Route::get('/blockchain-development-services', [App\Http\Controllers\Frontend\IndexController::class, 'blockchain']);
Route::get('/training-and-internship', [App\Http\Controllers\Frontend\IndexController::class, 'trndint']);
Route::get('/brand-identity-design', [App\Http\Controllers\Frontend\IndexController::class, 'brandiddesign']);
Route::post('savemaildata', [App\Http\Controllers\Frontend\IndexController::class, 'savemaildata']);
Route::get('/thank-you', [App\Http\Controllers\Frontend\IndexController::class, 'thankyou']);
Route::get('products/{slug?}', [App\Http\Controllers\Frontend\IndexController::class, 'products']);
Route::get('contact-us', [App\Http\Controllers\Frontend\IndexController::class, 'contactUs']);
Route::get('enquiry/{slug?}', [App\Http\Controllers\Frontend\IndexController::class, 'enquiry']);



require __DIR__.'/admin.php';

require __DIR__.'/user.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
