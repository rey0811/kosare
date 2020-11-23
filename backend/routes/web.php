<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// フットサル場一覧画面表示
Route::get('/futsalplaces/{place}',[FutsalController::class, 'index']);

// フットサル場詳細画面表示
Route::get('/futsalplaces/detail/{id}',[FutsalController::class, 'show'])->name('futsal.show');

// レビュー投稿画面表示
Route::get('/futsalplaces/detail/{id}/review',[FutsalController::class, 'create']);

// レビュー投稿
Route::post('/futsalplaces/detail/{id}',[FutsalController::class, 'store'])->name('futsal.store');
