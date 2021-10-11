<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


Route::get('/', [ProductController::class, 'products'])->name('front.products');
Route::get('/kategori/{id}', [ProductController::class, 'kategoriGetir'])->name('front.kategori');
Route::get('/detay/{id}', [ProductController::class, 'productDetail'])->name('front.productDetail');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/panel', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/urunler', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/kategoriler', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/kategori-detay/{id}', [AdminController::class, 'categoryDetail'])->name('admin.categoryDetail');
    Route::post('/kategori-guncelle/{id}', [AdminController::class, 'updateCategory'])->name('admin.updateCategory');
    Route::get('/kategori', [AdminController::class, 'newCategory'])->name('admin.newCategory');
    Route::post('/kategori-ekle', [AdminController::class, 'addNewCategory'])->name('admin.addNewCategory');
    Route::get('/kategori-sil/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::get('/kategori-durum-guncelle/{id}', [AdminController::class, 'changeCategoryStatus'])->name('admin.changeCategoryStatus');
    Route::get('/yeni', [AdminController::class, 'newProduct'])->name('admin.newProduct');
    Route::post('/yeni-ekle', [AdminController::class, 'store'])->name('admin.addNewProduct');
    Route::get('/urun-sil/{id}', [AdminController::class, 'delete'])->name('admin.deleteProduct');
    Route::get('/guncelle/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::post('/urun-guncelle/{id}', [AdminController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::get('/kullanicilar', [AdminController::class, 'users'])->name('admin.users');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

