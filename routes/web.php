<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;

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

Route::get('/product-detail/{id}',[ProductController::class,'show'])->name('product-detail');
/*---------- End Shop Route ----------*/

/*---------- Add Cart ----------*/
Route::get('/category/Add-Cart/{id}', 'App\Http\Controllers\CartItemController@AddCart');

Route::get('/category/Delete-Item-Cart/{id}', 'App\Http\Controllers\CartItemController@DeleteItemCart');

/* -- Add Auth to Cart -- */
Route::group(['middleware' => ['auth']], function() {
   // define your route, route groups here
Route::get('/cart', 'App\Http\Controllers\CartItemController@ViewListCart')->name('cart-page');
});
/* -- Add Auth to Cart -- */

Route::get('/Delete-Item-List-Cart/{id}', 'App\Http\Controllers\CartItemController@DeleteListItemCart');

Route::get('/Save-Item-List-Cart/{id}/{quanty}', 'App\Http\Controllers\CartItemController@SaveListItemCart');

Route::post('/Save-All', 'App\Http\Controllers\CartItemController@SaveAllListItemCart');
/*---------- End Add Cart ----------*/

/*---------- Check Out ----------*/
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout-page');

Route::post('/place-oder', 'App\Http\Controllers\CheckoutController@placeoder');

Route::get('/payment-success', 'App\Http\Controllers\CheckoutController@paymentsuccess')->name('payment-success');
/*---------- End Check Out ----------*/


/*---------- Home Controller ----------*/
//Route::get('/home', [HomeController::class, 'getMainCategory']);


/*---------- Auth Route ----------*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/email/verify', function () {
//     return view('auth.verify');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

// Route::get('/forgot-password', function () {
//     return view('auth.passwords.email');
// })->middleware('guest')->name('password.request');

/*---------- End Auth Route ----------*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
