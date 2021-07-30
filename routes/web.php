<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


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

// Route::get('/', function () {
//     return view('welcome');
// });




// FrontController
Route::get('/',[FrontController::class,'index']);
Route::get('bloglist/{id}',[FrontController::class,'bloglist']);



// Login Register Routes
Route::get('register',[LoginController::class,'reg_page']);
Route::post('reg_store',[LoginController::class,'register']);

Route::get('gr',[LoginController::class,'log_page'])->name('gr');
Route::post('log_store',[LoginController::class,'login']);

// Middleware
Route::group(['middleware' => ['admin']],function(){

Route::get('admin/index',[AdminController::class,'index']);

// Blog Controller
Route::get('admin/addblog',[BlogController::class,'addblog']);
Route::post('admin/store',[BlogController::class,'store']);
Route::get("admin/display",[BlogController::class,'display']);
Route::get("admin/editblog/{id}",[BlogController::class,'edit']);
Route::post('admin/update',[BlogController::class,'update']);
Route::get('admin/delete/{id}',[BlogController::class,'delete']);
Route::get('logout',[LoginController::class,'logout']);
});



Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cleared!";
});


