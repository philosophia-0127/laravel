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

// 注文画面 //
Route::group(['prefix' => 'orders', 'middleware' => 'auth'], function() {

    Route::get('input', 'OrderController@input') // 入力画面
        ->name('orders.input');

    Route::post('confirm', 'OrderController@confirm') // 確認画面&編集可
        ->name('orders.confirm');
        // ->where('id', '[0-9]+');

    Route::post('store', 'OrderController@store') // パラメーター貯蔵
        ->name('orders.store');

    Route::get('finish', 'OrderController@finish') // 完了画面
        ->name('orders.finish');
});

// ログイン //
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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
    // ->where('id', '[0-9]+');
