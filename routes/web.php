<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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


Route::get('/',  [FrontendController::class, 'index']);
Route::get('ecommerce',  [FrontendController::class, 'nativeApp'])->name('native');
Route::get('feature',  [FrontendController::class, 'feature'])->name('feature');
Route::get('fashion',  [FrontendController::class, 'fashion'])->name('fashion');
Route::get('cosmetic',  [FrontendController::class, 'cosmetic'])->name('cosmetic');
Route::get('pricing',  [FrontendController::class, 'pricing'])->name('pricing');
Route::get('supplement',  [FrontendController::class, 'supplement'])->name('supplement');
Route::get('others',  [FrontendController::class, 'other'])->name('other');

