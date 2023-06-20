<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/article/{articleId}', [HomeController::class, 'article'])->name('article');
Route::get('/default-home', [HomeController::class, 'default'])->name('default');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{productId}', [ShopController::class, 'product'])->name('product');

Route::get('/pdf', [PdfController::class, 'index'])->name('pdf');
Route::get('/pdf/download-pdf', [PdfController::class, 'downloadPDF'])->name('downloadPDF');

Route::resource('articles', ArticleController::class);
Route::resource('products', ProductController::class);
