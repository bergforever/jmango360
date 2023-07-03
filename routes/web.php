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
Route::get('native-app',  [FrontendController::class, 'nativeApp'])->name('native');
Route::get('feature',  [FrontendController::class, 'feature'])->name('feature');
Route::get('pricing',  [FrontendController::class, 'pricing'])->name('pricing');

