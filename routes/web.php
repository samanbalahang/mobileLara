<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CustomeAdminController;
use App\Http\Controllers\BuyersController;
use App\Http\Controllers\AdminController;



use App\Http\Controllers\admin\dashCounterController;
use App\Http\Controllers\admin\dashBannerController;
use App\Http\Controllers\admin\dashTemplatesController;
use App\Http\Controllers\admin\dashPostController;
use App\Http\Controllers\admin\dashMediaController;
use App\Http\Controllers\admin\dashCatsController;
use App\Http\Controllers\admin\dashTagesController;
use App\Http\Controllers\admin\dashPagesController;
use App\Http\Controllers\admin\dashAdvController;
use App\Http\Controllers\admin\dashCommentController;
use App\Http\Controllers\admin\dashProductController;
use App\Http\Controllers\admin\dashMarketerController;
use App\Http\Controllers\admin\dashFormController;
use App\Http\Controllers\admin\dashUserProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


/*
|--------------------------------------------------------------------------
|               Private
|--------------------------------------------------------------------------
|
| فقط ادمین میتواند این روت ها را مشاهده کند.
| رول ادمین برای ورد به این پنل طراحی شده است در سیدر ها
|   میتوانید انواع یوزر تعریف شده را مشاهده کنید.
|
*/


Route::group(['prefix' => 'wp-admin', 'middleware' => ['auth','role:role_admin']],function(){
    Route::resource('/',dashCounterController::class);
    Route::resource('/banner',dashBannerController::class);
    Route::resource('/tremplates',dashTemplatesController::class);
    Route::resource('/posts',dashPostController::class);
    Route::resource('/media',dashMediaController::class);
    Route::post('/dropMedia',[dashMediaController::class,"dropMedia"])->name('dropMedia');
    Route::post('/summer-note-media',[dashMediaController::class,"summerNoteMedia"])->name('summerNoteMedia');
    Route::resource('/cats',dashCatsController::class);
    Route::resource('/tags',dashTagesController::class);
    Route::resource('/pages',dashPagesController::class);
    Route::resource('/advs',dashAdvController::class);
    Route::resource('/comments',dashCommentController::class); 
    Route::resource('/products',dashProductController::class); 
    Route::resource('/marketers',dashMarketerController::class);
    Route::resource('/forms',dashFormController::class);
    Route::resource('/users',dashUserProfileController::class);
    Route::resource('/coupons',dashUserProfileController::class);
});


// Route::get('/admin',         [AdminController::class,'index']);

// Route::get('/superadmin',    [SuperAdminController::class,'index']);

// Route::get('/custome-admin', [CustomeAdminController::class,'index']);

// Route::get('/buyers-admin',  [BuyersController::class,'index']);


/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
|
| این قسمت برای روت های پابلیک و عمومی است همه کاربران این روت 
| ها را میتوانند ببینند و محدودیتی برای دیدن این روت ها وجود ندارد
|
|
*/

Route::get('/',                 [PostController::class ,"thePublicIndex"]);
Route::get('/test',             [PostController::class ,"test"]);
Route::get('/shop',             [PostController::class ,"thePublicShop"]);
Route::get('/shop/{uri}',       [PostController::class ,"thePublicProduct"]);
Route::get('/login',            [loginController::class,"index"])->name('login');
Route::post('/login',           [loginController::class,"store"])->name('login.store');
Route::get('/{uri}',            [PostController::class ,"thePublicPosts"]);
