<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
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

Route::get('/clear', function () {
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    return "Cleared!";
});


Route::get('/register' ,[RegisterController::class, 'Index'])->name('register');
Route::post('/register_post' ,[RegisterController::class, 'Register'])->name('register.post');
//
//profile
Route::get('/profile', [ProfileController::class, 'Profile'])->name('profile');
Route::post('/profile_post', [ProfileController::class, 'ProfilePost'])->name('profile.post');
//login
Route::get('/login' ,[LoginController::class, 'Index'])->name('login');
Route::post('/admin_login' ,[LoginController::class, 'Admin_login'])->name('admin_login');
Route::get('/logout' ,[LoginController::class, 'logout'])->name('logout');

//Reset Password
Route::get('/reset_password' ,[ResetPasswordController::class, 'Index'])->name('reset.password');
Route::post('/reset_password_post' ,[ResetPasswordController::class, 'ResetPassword'])->name('reset.password.post');
//forget password
Route::get('/forgot_password', [ForgotPasswordController::class, 'Index'])->name('forgot.password');
Route::post('/forgot_password_post', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('/reset_password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.form');
Route::post('/reset_password_post', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::group(['prefix' => 'admin', 'namespace' => 'admin','middleware' => ['auth','admin']], function () {
    Route::get('/', [DashboardController::class, 'Dashboard'])->name('admin_dashboard');
    //categories
    Route::get('/category', [CategoryController::class, 'Index'])->name('admin_category');
    Route::post('/category', [CategoryController::class, 'store'])->name('admin_category_store');
    Route::any('/category_update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
    Route::any('/delete_update/{id}', [CategoryController::class, 'destory'])->name('admin_category_delete');
    //Team
    Route::get('/team', [TeamController::class, 'Index'])->name('admin_team');
    Route::get('/create_team', [TeamController::class, 'Create'])->name('admin_create_team');
    Route::post('/store_team', [TeamController::class, 'store'])->name('admin_store_team');
    Route::get('/edit_team/{id}', [TeamController::class, 'edit'])->name('admin_edit_team');
    Route::post('/update_team/{id}', [TeamController::class, 'update'])->name('admin_update_team');
    Route::delete('/destory_team/{id}', [TeamController::class, 'destory'])->name('admin_delete_team');
    //Portfolio
    Route::get('/portfolio', [PortfolioController::class, 'Index'])->name('admin_portfolio');
    Route::get('/create_portfolio', [PortfolioController::class, 'Create'])->name('admin_create_portfolio');
    Route::post('/store_portfolio', [PortfolioController::class, 'store'])->name('admin_store_portfolio');
    Route::get('/edit_portfolio/{id}', [PortfolioController::class, 'edit'])->name('admin_edit_portfolio');
    Route::post('/update_portfolio/{id}', [PortfolioController::class, 'update'])->name('admin_update_portfolio');
    Route::delete('/destory_portfolio/{id}', [PortfolioController::class, 'destory'])->name('admin_delete_portfolio');
    //contact
    Route::get('/contact', [ContactController::class, 'Index'])->name('admin_contact');
    Route::delete('/destory_contact/{id}', [ContactController::class, 'destory'])->name('admin_contact_destory');
    //settings
    Route::get('/settings', [SettingController::class, 'Index'])->name('admin_settings');
    Route::post('/settings', [SettingController::class, 'store'])->name('admin_settings_store');
    //update settings
    Route::post('/update_settings', [SettingController::class, 'Update'])->name('admin_update_settings');
});
Route::post('ckeditor/image_upload', [CkeditorController::class, 'upload'])->name('upload');

Route::group(['prefix' => 'client', 'namespace' => 'client','middleware' => ['auth','client']], function () {
    Route::get('/', [\App\Http\Controllers\client\DashboardController::class, 'Dashboard'])->name('client_dashboard');
});




//Routes for B2C
Route::get('/',  [FrontendController::class, 'index']);
Route::get('ecommerce',  [FrontendController::class, 'nativeApp'])->name('native');
Route::get('feature',  [FrontendController::class, 'feature'])->name('feature');
Route::get('fashion',  [FrontendController::class, 'fashion'])->name('fashion');
Route::get('cosmetic',  [FrontendController::class, 'cosmetic'])->name('cosmetic');
Route::get('pricing',  [FrontendController::class, 'pricing'])->name('pricing');
Route::get('supplement',  [FrontendController::class, 'supplement'])->name('supplement');
Route::get('others',  [FrontendController::class, 'other'])->name('other');
Route::get('magento',  [FrontendController::class, 'magento'])->name('magento');
Route::get('big-commerce',  [FrontendController::class, 'commerce'])->name('big-commerce');
Route::get('sales-force',  [FrontendController::class, 'salesForce'])->name('sales-force');
Route::get('light-speed',  [FrontendController::class, 'lightSpeed'])->name('light-speed');
Route::get('shopify',  [FrontendController::class, 'shopify'])->name('shopify');

/*//Routes for B2B

Route::get('b2b-bigcommerce',  [FrontendController::class, 'b2bBigcommerce'])->name('b2b-bigcommerce');
Route::get('b2b-ordering-app',  [FrontendController::class, 'orderApp'])->name('ordering-app');*/

Route::get('customers',  [FrontendController::class, 'customers'])->name('customers');
Route::get('blogs',  [FrontendController::class, 'blog'])->name('blog');
