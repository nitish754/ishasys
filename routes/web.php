<?php

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

Route::get('/',function(){
    return view('website.home');
});

Route::get('about',function(){
    return view('website.about');
});



Route::get('services',function(){
    return view('website.service');
});

Route::get('protfolio', function(){
    return view('website.portfolio');
});

Route::get('contact', function(){
        return view('website.contact');
});


Route::get('product', function(){
    return view('website.product');
});



