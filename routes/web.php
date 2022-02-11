<?php

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

/*---------- Main Route ----------*/
Route::get('/', function (){
    return view('main_public.index');
})->name('home-page');

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
Route::get('/fruits',function (){
    return view('main_public.fruits');
})->name('fruits-page');

Route::get('/vegetable',function (){
    return view('main_public.vegetable');
})->name('vegetable-page');

Route::get('/organicvegetable',function (){
    return view('main_public.organicvegetable');
})->name('organicvegetable-page');

Route::get('/mushroom',function (){
    return view('main_public.mushroom');
})->name('mushroom-page');

//Route::get('/meat',function (){
//    return view('main_public.meat');
//})->name('meat-page');

Route::get('/meat',[ProductController::class,'index'])->name('meat-page');

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

Route::get('/dryfood',function (){
    return view('main_public.dryfood');
})->name('dryfood-page');

Route::get('/nuts',function (){
    return view('main_public.nuts');
})->name('nuts-page');

Route::get('/cereals',function (){
    return view('main_public.cereals');
})->name('cereals-page');

Route::get('/noodles',function (){
    return view('main_public.noodles');
})->name('noodles-page');

Route::get('/rice',function (){
    return view('main_public.rice');
})->name('rice-page');

Route::get('/drinkmilk',function (){
    return view('main_public.drinkmilk');
})->name('drinkmilk-page');

Route::get('/juice',function (){
    return view('main_public.juice');
})->name('juice-page');

Route::get('/milk',function (){
    return view('main_public.milk');
})->name('milk-page');

Route::get('/pricing',function (){
    return view('main_public.pricing');
})->name('pricing-page');
/*---------- End Shop Route ----------*/

