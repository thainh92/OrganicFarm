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

Route::get('/', 'App\Http\Controllers\ProductController@getTrending')->name('home-page');

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
Route::get('/product', 'App\Http\Controllers\ProductController@getProducts')->name('product-page');

Route::get('/fruits', 'App\Http\Controllers\ProductController@getFruits')->name('fruits-page');

Route::get('/vegetable', 'App\Http\Controllers\ProductController@getVegetables')->name('vegetable-page');

Route::get('/organic-vegetable', 'App\Http\Controllers\ProductController@getOrganicVegetables')->name('organic-vegetable-page');

Route::get('/mushroom', 'App\Http\Controllers\ProductController@getMushrooms')->name('mushroom-page');

Route::get('/meat', 'App\Http\Controllers\ProductController@getMeats')->name('meat-page');

Route::get('/pork', 'App\Http\Controllers\ProductController@getPorks')->name('pork-page');

Route::get('/beef', 'App\Http\Controllers\ProductController@getBeefs')->name('beef-page');

Route::get('/poultry', 'App\Http\Controllers\ProductController@getPoultrys')->name('poultry-page');

Route::get('/milk', 'App\Http\Controllers\ProductController@getMilks')->name('milk-page');

Route::get('/pricing',function (){
    return view('main_public.pricing');
})->name('pricing-page');

Route::get('/product-detail',function (){
    return view('main_public.product_detail');
})->name('product-detail');

Route::get('/product-detail/{id}',[ProductController::class,'getProductById']);
/*---------- End Shop Route ----------*/

/*---------- Add Cart ----------*/
Route::get('/Add-Cart/{id}', 'App\Http\Controllers\CartItemController@AddCart');


/*---------- Home Controller ----------*/
