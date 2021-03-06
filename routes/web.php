<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Providers\AppServiceProvider;
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
/*pass*/
/*Route::get('forgot-password', [PageController::class,'forgot_password']);*/

Route::post('reset_password', [\App\Http\Controllers\ResetController::class,'forgotPass']);
Route::get('change_password', [\App\Http\Controllers\ResetController::class,'chagePass']);

Auth::routes();

Route::middleware(['role:admin'])->group(function () {
    Route::resource('subscribes',SubscribeController::class);
    Route::get('/subscribers', [App\Http\Controllers\HomeController::class, 'subscribers']);
    Route::get('/users', [App\Http\Controllers\HomeController::class, 'users']);
    Route::get('/members_videos', [App\Http\Controllers\HomeController::class, 'edit_members_videos']);
    Route::get('/simple_videos', [App\Http\Controllers\HomeController::class, 'simple_videos']);
    Route::get('/training_videos', [App\Http\Controllers\HomeController::class, 'training_videos']);
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
    Route::post('add_members_videos', [App\Http\Controllers\VideoController::class, 'add_members_videos']);
    Route::post('delete_members_video', [App\Http\Controllers\VideoController::class, 'delete_members_video']);
    Route::post('delete_training_video', [App\Http\Controllers\VideoController::class, 'delete_training_video']);
    Route::post('delete_simple_video', [App\Http\Controllers\VideoController::class, 'delete_simple_video']);
    Route::post('delete_subscriber',[App\Http\Controllers\SubscribeController::class, 'destroy']);
    Route::post('change_simple_video_status',[App\Http\Controllers\VideoController::class, 'change_simple_video_status']);
    Route::post('change_members_video_status',[App\Http\Controllers\VideoController::class, 'change_members_video_status']);
    Route::post('change_training_video_status',[App\Http\Controllers\VideoController::class, 'change_training_video_status']);
    Route::post('edit_simple_video',[App\Http\Controllers\VideoController::class, 'edit_simple_video']);
    Route::post('edit_training_video',[App\Http\Controllers\VideoController::class, 'edit_training_video']);
    Route::post('update_members_video',[App\Http\Controllers\VideoController::class, 'update_members_video']);
    Route::post('change_user_status',[App\Http\Controllers\HomeController::class, 'change_user_status']);
    Route::post('add_simple_video',[App\Http\Controllers\VideoController::class, 'add_simple_video']);
    Route::post('add_training_video',[App\Http\Controllers\VideoController::class, 'add_training_video']);
    Route::get('change_password', [\App\Http\Controllers\HomeController::class,'changePassPage']);
    Route::post('change_pass', [\App\Http\Controllers\ResetController::class,'ChangePass']);



});
Route::middleware(['auth'])->group(function () {
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
Route::middleware(['role:user'])->group(function () {
    Route::get('/video/{name}',  [App\Http\Controllers\VideoController::class, 'return_video'])->name('video');
});


