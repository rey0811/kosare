<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FutsalController;

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
    return view('index');
})->name('top');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// プロフィール編集画面
Route::get('/home/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');

// プロフィール更新
Route::post('/home/{id}/update', [HomeController::class, 'update'])->name('home.update');


// フットサル場一覧画面表示
Route::get('/futsalplaces/{place}',[FutsalController::class, 'index']);

// フットサル場詳細画面表示
Route::get('/futsalplaces/detail/{id}',[FutsalController::class, 'show'])->name('futsal.show');

Route::group(['middleware' => 'auth'], function() {
    // レビュー投稿画面表示
    Route::get('/futsalplaces/detail/{id}/review',[FutsalController::class, 'create']);
    // レビュー投稿
    Route::post('/futsalplaces/detail/{id}',[FutsalController::class, 'store'])->name('futsal.store');
});
