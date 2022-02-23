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
//Route::get('/products', 'App\Http\Controllers\ProductController@getProducts')->name('product-page');
Route::get('/category/{category_name}', [ProductController::class, 'getProducts'])->name('product-page');

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

Route::get('/Delete-Item-Cart/{id}', 'App\Http\Controllers\CartItemController@DeleteItemCart');

Route::get('/cart', 'App\Http\Controllers\CartItemController@ViewListCart')->name('cart-page');

Route::get('/Delete-Item-List-Cart/{id}', 'App\Http\Controllers\CartItemController@DeleteListItemCart');

Route::get('/Save-Item-List-Cart/{id}/{quanty}', 'App\Http\Controllers\CartItemController@SaveListItemCart');

Route::post('/Save-All', 'App\Http\Controllers\CartItemController@SaveAllListItemCart');

/*---------- Home Controller ----------*/
//Route::get('/home', [HomeController::class, 'getMainCategory']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
