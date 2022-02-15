<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*---------- Admin Route ----------*/
Route::get('/admin/index', function (){
    return view('admin.index');
});
Route::get('/admin/categories', [CategoryController::class, 'indexAdmin'])->name('admin-category-index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin-create-category');
Route::post('/admin/category/create', [CategoryController::class, 'store'])->name('admin-store-category');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin-edit-category');
Route::put('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin-update-category');
Route::get('/admin/category/trash/{id}', [CategoryController::class, 'trash'])->name('admin-trash-category');



/*---------- End Admin Route ----------*/
