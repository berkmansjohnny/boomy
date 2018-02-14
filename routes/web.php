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

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

Route::get('/honden', function () {
    return view('products.index');
})->name('pages.honden');

Route::get('/honden/detail', function () {
    return view('products.detail');
})->name('pages.productdetail');

Route::get('/paarden', function () {
    return view('products.paarden');
})->name('pages.paarden');

Route::get('/over-ons', function () {
    return view('pages.bedrijf');
})->name('pages.bedrijf');
