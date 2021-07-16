<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopAboutController;

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

    Route::get('finish', 'OrderController@finish') // 完了画面
        ->name('orders.finish');
});

// ログイン //
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// トップページ //
Route::get('/', [TopAboutController::class, 'top'])
    ->name('homes.top');

// 店舗詳細 //
Route::get('/about', [TopAboutController::class, 'about'])
    ->name('homes.about');

// 元々入っていたもの //
Route::get('/create', function () {
    return view('../post/create');
});


// 商品一覧 & 商品詳細 //
    Route::name('products.')
        ->group(function () {
            Route::get('/products', 'ProductController@index')->name('index');
            Route::get('/products/{id}', 'ProductController@show')->name('show');
                // ->where('id', '[0-9]+');
        });

    Route::name('line_item.')
        ->group(function () {
            Route::post('/line_item/create', 'LineItemController@create')->name('create');
        });

Route::group(['middleware' => 'auth'], function() {
    Route::name('cart.')
        ->group(function () {
            Route::get('/cart', 'CartController@index')->name('index');
        });
});




// ユーザー //
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function() {
    Route::get('edit', 'UserController@edit')->name('users.edit');
    Route::post('update', 'UserController@update')->name('users.update');
});
