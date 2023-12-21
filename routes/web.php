<?php

use App\Http\Controllers\BannerController;
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

// Route::get('/', BannerController::class . '@index');
Route::get('/detail_produk/{id}', [BannerController::class, 'detail']);
Route::get('/detail_artikel/{id}', [BannerController::class, 'detail_artikel']);
Route::get('/detail_harga', [BannerController::class, 'harga']);
Route::get('/kredit', [BannerController::class, 'kredit']);
Route::get('/', [BannerController::class, 'test']);
