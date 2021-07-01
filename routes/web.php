<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

// トップページ //
Route::get('/', function () {

    $products = [
        'ichigo',
        'chocolate',
        'cocoa',
    ];

    return view('homes/top')
        ->with(['products' => $products]);
});

// 店舗詳細 //
Route::get('/about', function () {
    return view('homes/about');
});

// 元々入っていたもの //
Route::get('/create', function () {
    return view('../post/create');
});

// 商品一覧 //
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

// 商品詳細 //
Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');



// 注文画面 //
Route::get('/order/input', [OrderController::class, 'input'])
    ->name('orders.input');

Route::get('/join/', function () {
    return '入会ページ';
});

Route::get('/{id}/', function ($id) {
    return $id . 'のページ';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'PostController');
