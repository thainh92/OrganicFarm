<?php

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
    