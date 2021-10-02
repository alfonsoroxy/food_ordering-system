<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\MenuComponent;
use App\Http\Livewire\PaymentComponent;
use App\Http\Livewire\PolicyComponent;
use App\Http\Livewire\TermsComponent;
use App\Http\Livewire\ThankYouComponent;

//Admin
use App\Http\Livewire\Admin\AdminDashboardComponent;
//Admin Category
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
//Admin Menu
use App\Http\Livewire\Admin\AdminMenuComponent;
use App\Http\Livewire\Admin\AdminAddMenuComponent;
use App\Http\Livewire\Admin\AdminEditMenuComponent;
//Admin Orders
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;

use App\Http\Livewire\Admin\AdminContactComponent;

//Customer
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Customer\CustomerOrderDetailsComponent;
use App\Http\Livewire\Customer\CustomerOrdersComponent;


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

Route::get('/about', AboutComponent::class);

Route::get('/cart', CartComponent::class)->name('menu.cart');

Route::get('/menu-category/{category_slug}', CategoryComponent::class)->name('menu.category');

Route::get('/checkout', CheckoutComponent::class)->name('checkout');

Route::get('/contact', ContactComponent::class)->name('contact');

Route::get('/', HomeComponent::class);

Route::get('/menu', MenuComponent::class);

// Route::get('/payment', PaymentComponent::class);

Route::get('/policy', PolicyComponent::class);

Route::get('/terms', TermsComponent::class);

Route::get('/thank-you', ThankYouComponent::class)->name('thank-you');

//Middleware for Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');

    Route::get('customer/orders', CustomerOrdersComponent::class)->name('customer.orders');
    Route::get('customer/orders/{order_id}', CustomerOrderDetailsComponent::class)->name('customer.ordersdetails');
});

//Middleware for Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');

    Route::get('/admin/menus', AdminMenuComponent::class)->name('admin.menus');
    Route::get('/admin/menu/add', AdminAddMenuComponent::class)->name('admin.addmenu');
    Route::get('/admin/menu/edit/{menu_slug}',AdminEditMenuComponent::class)->name('admin.editmenu');

    Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.ordersdetails');

    Route::get('/admin/contacts', AdminContactComponent::class)->name('admin.contacts');
});
