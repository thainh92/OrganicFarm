<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*---------- Admin Route ----------*/
Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin-index');
/*---------- Admin Category Route ----------*/
Route::get('/admin/categories', [CategoryController::class, 'indexAdmin'])->name('admin-category-index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin-create-category');
Route::post('/admin/category/create', [CategoryController::class, 'store'])->name('admin-store-category');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin-edit-category');
Route::put('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin-update-category');
Route::get('/admin/category/trash/{id}', [CategoryController::class, 'trash'])->name('admin-trash-category');
/*---------- Admin Product Route ----------*/
Route::get('/admin/products', [ProductController::class, 'indexAdmin'])->name('admin-product-index');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin-create-product');
Route::post('/admin/product/create', [ProductController::class, 'store'])->name('admin-store-product');
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin-edit-product');
Route::put('/admin/product/update/{id}', [ProductController::class, 'update'])->name('admin-update-product');
Route::get('/admin/product/trash/{id}', [ProductController::class, 'trash'])->name('admin-trash-product');


Route::get('/admin/product/getSubCategoryProduct', [ProductController::class, 'getSubCategoryProduct']);
Route::get('/admin/category/getMainCategory', [CategoryController::class, 'getMainCategories']);
/*---------- End Admin Route ----------*/
