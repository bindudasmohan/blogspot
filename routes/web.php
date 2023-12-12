<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\dashboard\LoginController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\TagController;
use App\Http\Controllers\dashboard\ArticleController;
use App\Http\Controllers\BlogController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BlogController::class,'index'])->name('index');
Route::get('/details',[BlogController::class,'show'])->name('details');
Route::get('/categorise',[BlogController::class,'categorise'])->name('categorise');

Route::get('/dashboard',[LoginController::class,'index'])->name('dashboard');
Route::get('/createaccount',[LoginController::class,'create'])->name('createaccount');
Route::post('/storeaccount',[LoginController::class,'store'])->name('storeaccount');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/error',[LoginController::class,'error'])->name('error');


Route::get('/categorylist',[CategoryController::class,'index'])->name('categorylist');
Route::get('/newcategory',[CategoryController::class,'create'])->name('newcategory');
Route::post('/storecategory',[CategoryController::class,'store'])->name('storecategory');
Route::get('/editcategory',[CategoryController::class,'edit'])->name('editcategory');
Route::post('/updatecategory',[CategoryController::class,'update'])->name('updatecategory');
Route::post('/deletecategory',[CategoryController::class,'destroy'])->name('destroycategory');

Route::get('/taglist',[TagController::class,'index'])->name('taglist');
Route::get('/newtag',[TagController::class,'create'])->name('newtag');
Route::post('/storetag',[TagController::class,'store'])->name('storetag');
Route::get('/edittag',[TagController::class,'edit'])->name('edittag');
Route::post('/updatetag',[TagController::class,'update'])->name('updatetag');
Route::post('/deletetag',[TagController::class,'destroy'])->name('destroytag');

Route::get('/articlelist',[ArticleController::class,'index'])->name('articlelist');
Route::get('/newarticle',[ArticleController::class,'create'])->name('newarticle');
Route::post('/storearticle',[ArticleController::class,'store'])->name('storearticle');
Route::get('/editarticle',[ArticleController::class,'edit'])->name('editarticle');
Route::post('/updatearticle',[ArticleController::class,'update'])->name('updatearticle');
Route::post('/deletearticle',[ArticleController::class,'destroy'])->name('destroyarticle');
Route::get('/home',[ArticleController::class,'home'])->name('home');