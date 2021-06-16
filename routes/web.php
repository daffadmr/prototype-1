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
use App\Http\LIvewire\TransactionHistory;
use App\Http\LIvewire\TransactionHistoryDetail;
use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\AdminOrderDashboard;
use App\Http\Livewire\EditProduct;
use App\Http\Livewire\CreateProduct;
use App\Http\Livewire\EditTransaction;
use App\Http\Livewire\DetailTransaction;
use App\Http\Livewire\DetailTransactionHistory;
use App\Http\Livewire\Pembayaran;
use App\Http\Livewire\PembayaranSukses;


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
    Route::get('/all-transaction', TransactionHistory::class)->name('all-transaction');
    Route::get('/transaction/{id}', TransactionHistoryDetail::class)->name('transaction-detail');
    Route::get('/admin/product', AdminDashboard::class)->name('admin-product');
    Route::get('/admin/order', AdminOrderDashboard::class)->name('admin-order');
    Route::get('/admin/edit-product/{id}', EditProduct::class)->name('edit-product');
    Route::get('/admin/create-product', CreateProduct::class)->name('create-product');
    Route::get('/admin/order/edit-transaction/{id}', EditTransaction::class)->name('edit-transaction');
    Route::get('/admin/order/detail-transaction/{id}', DetailTransaction::class)->name('detail-transaction');
    Route::get('/pembayaran/{id}', Pembayaran::class)->name('pembayaran');
    Route::get('/pembayaran-sukses', PembayaranSukses::class)->name('sukses');
});

