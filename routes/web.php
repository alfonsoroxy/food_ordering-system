<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\TermsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', [AboutController::class, 'index']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/confirmation', [ConfirmationController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/payment', [PaymentController::class, 'index']);

Route::get('/policy', [PolicyController::class, 'index']);

Route::get('/shipping', [ShippingController::class, 'index']);

Route::get('/terms', [TermsController::class, 'index']);


// Auth
Auth::routes();

//Admin
Route::get('/admin', [AdminController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
