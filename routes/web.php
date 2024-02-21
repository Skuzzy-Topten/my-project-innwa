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
Route::get('/register', function(){
    return view('register');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/my-account', function(){
    return view('my-account');
});

Route::get('/cart', function(){
    return view('add-to-cart');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/order-receive', function(){
    return view('order-receive');
});

Route::get('/wishlist', function(){
    return view('wishlist');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop-archive', function () {
    return view('shop-archive');
});
Route::get('/product-detail', function () {
    return view('product-detail');
});
Route::get('/promotion', function () {
    return view('promotion');
});
Route::get('/promotion-products', function () {
    return view('promotion-products');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/news/{name}', function () {
    return view('news-detail');
});
Route::get('/contact', function () {
    return view('contact');
});