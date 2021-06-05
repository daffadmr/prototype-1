<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\ProductLeague;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductDetail;

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

