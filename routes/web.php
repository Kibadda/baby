<?php

use App\Livewire\Wishlist;
use App\Livewire\Admin\Wishlist\Create;
use App\Livewire\Admin\Wishlist\Edit;
use App\Livewire\Admin\Wishlist\Index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wishlist', Wishlist::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/wishlist', Index::class)->name('wishlist.index');
    Route::get('/wishlist/create', Create::class)->name('wishlist.create');
    Route::get('/wishlist/edit/{wishlistItem}', Edit::class)->name('wishlist.edit');
});
