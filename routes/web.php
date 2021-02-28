<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Providers\AppServiceProvider;
use App\Models\User;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\ProductAjaxController;
use App\Http\Controllers\Members_videosController;

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
Route::get('/', [PageController::class,'home']);
Route::get('casino-rng', [PageController::class,'casino_rng']);
Route::get('contact', [PageController::class,'contact']);
Route::get('faq', [PageController::class,'faq']);
Route::get('home', [PageController::class,'home']);
Route::get('low-of-third', [PageController::class,'law_of_thrid']);
//Route::get('login', [PageController::class,'login']);
Route::get('mobile-app', [PageController::class,'mobile_App']);
Route::get('sing-up', [PageController::class,'sing_up']);
Route::get('forgot-password', [PageController::class,'forgot_password']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users']);

Route::get('/members_videos', [App\Http\Controllers\HomeController::class, 'members_videos']);
Route::get('/simple_videos', [App\Http\Controllers\HomeController::class, 'simple_videos']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('subscribes',SubscribeController::class);
Route::post('add_members_videos', [App\Http\Controllers\Members_videosController::class, 'store']);

Route::post('delete_subscriber',[App\Http\Controllers\SubscribeController::class, 'destroy']);
Route::post('change_status',[App\Http\Controllers\Simle_videosController::class, 'update']);
Route::post('edit_simle_video',[App\Http\Controllers\Simle_videosController::class, 'edit']);


Route::middleware(['role:admin'])->group(function () {
    Route::get('/subscribers', [App\Http\Controllers\HomeController::class, 'subscribers']);
});

Route::middleware(['role:user'])->group(function () {
   //
});
