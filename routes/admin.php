<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*---------- Admin Route ----------*/




// Route::middleware('auth:admin')->group(function (){
Route::group(['middleware' => ['admin']], function() {
    // Route::get('/', [HomeController::class, 'index'])->name('admin-index');

    Route::get('/index', function () {
        return view('admin.index');
    })->name('admin-index');


    /*---------- Admin Category Route ----------*/
    Route::get('/categories', [CategoryController::class, 'indexAdmin'])->name('admin-category-index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin-create-category');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('admin-store-category');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin-edit-category');
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('admin-update-category');
    Route::get('/category/trash/{id}', [CategoryController::class, 'trash'])->name('admin-trash-category');
    /*---------- Admin Product Route ----------*/
    Route::get('/products', [ProductController::class, 'indexAdmin'])->name('admin-product-index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('admin-create-product');
    Route::post('/product/create', [ProductController::class, 'store'])->name('admin-store-product');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('admin-edit-product');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('admin-update-product');
    Route::get('/product/trash/{id}', [ProductController::class, 'trash'])->name('admin-trash-product');
    Route::get('/product/getSubCategoryProduct', [ProductController::class, 'getSubCategoryProduct']);
    Route::get('/category/getMainCategory', [CategoryController::class, 'getMainCategories']);
});



