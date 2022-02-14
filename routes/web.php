<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function (){
    return view('main_public.index');
});
    Route::get('/contact',function (){
        return view('main_public.contact');
    })->name('contact-page');

    Route::get('/aboutus',function (){
        return view('main_public.aboutus');
    })->name('aboutus-page');


    Route::get('/blog',function (){
        return view('main_public.blog');
    })->name('blog-page');

    Route::get('/blogdetails',function (){
        return view('main_public.blogdetails');
    })->name('blog-details-page');


/*---------- Main Route ----------*/

//Route::get('/', function (){
//    return view('main_public.index');
//})->name('home-page');

Route::get('/',[HomeController::class, 'showAllSaleProduct'])->name('home-page');

Route::get('/contact',function (){
    return view('main_public.contact');
})->name('contact-page');

Route::get('/faq',function (){
    return view('main_public.faq');
})->name('faq-page');

Route::get('/privatepolicy',function (){
    return view('main_public.privatepolicy');
})->name('private-page');

Route::get('/terms',function (){
    return view('main_public.terms');
})->name('terms-page');

Route::get('/blog',function (){
    return view('main_public.blog');
})->name('blog-page');

Route::get('/cart',function (){
    return view('main_public.cart');
})->name('cart-page');

Route::get('/aboutus',function (){
    return view('main_public.about');
})->name('about-page');
/*---------- End Main Route ----------*/

/*---------- Shop Route ----------*/
Route::get('/fruits', 'App\Http\Controllers\ProductController@getFruits')->name('fruits-page');

Route::get('/vegetable', 'App\Http\Controllers\ProductController@getVegetables')->name('vegetable-page');

Route::get('/meat', 'App\Http\Controllers\ProductController@getMeats')->name('meat-page');

Route::get('/milk', 'App\Http\Controllers\ProductController@getMilks')->name('milk-page');

Route::get('/organicvegetable',function (){
    return view('main_public.organicvegetable');
})->name('organicvegetable-page');

Route::get('/mushroom',function (){
    return view('main_public.mushroom');
})->name('mushroom-page');

Route::get('/pork',function (){
    return view('main_public.pork');
})->name('pork-page');

Route::get('/beef',function (){
    return view('main_public.beef');
})->name('beef-page');

Route::get('/poultryegg',function (){
    return view('main_public.poultryegg');
})->name('poultryegg-page');

Route::get('/seafood',function (){
    return view('main_public.seafood');
})->name('seafood-page');

Route::get('/product',function (){
    return view('main_public.product');
})->name('product-page');

Route::get('/milk',function (){
    return view('main_public.milk');
})->name('milk-page');

Route::get('/pricing',function (){
    return view('main_public.pricing');
})->name('pricing-page');

Route::get('/product-detail',function (){
    return view('main_public.product_detail');
})->name('product-detail');

Route::get('/product-detail/{id}',[ProductController::class,'getProductById']);
/*---------- End Shop Route ----------*/

/*---------- Admin Route ----------*/
Route::get('/admin/index', [CategoryController::class, 'index'])->name('administrator');
/*---------- End Admin Route ----------*/
