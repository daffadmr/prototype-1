<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductLeague;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\UserProfile;
use App\Http\Livewire\EditProfile;
use App\Http\Livewire\EditAddress;
use App\Http\Livewire\Pembayaran;
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

Auth::routes();

Route::get('/', Home::class)->name('home');
Route::get('/product/league/{id}', ProductLeague::class)->name('product-league');
Route::get('/product/index', ProductIndex::class)->name('product-index');
Route::get('/product/detail/{id}', ProductDetail::class)->name('product-detail');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user-profile/{id}', UserProfile::class)->name('user-profile');
    Route::get('/user-profile/edit/{id}', EditProfile::class)->name('edit-profile');
    Route::get('/cart', Cart::class)->name('cart');
    Route::get('/cart/checkout/{id}', Checkout::class)->name('checkout');
    Route::get('/cart/checkout/edit-recipient/{id}', EditAddress::class)->name('edit-recipient');
    Route::get('/pembayaran', Pembayaran::class)->name('pembayaran');
});

