<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ChildcategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdvertisementController;

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
// Sukurtas naujas kelias

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/home', function () {
    return view('home');
});

// Kelias į administratoriaus puslapį
Route::get('/auth', function () {
    return view('backend.admin.index');
});

// Neveikia stilius nurodžius kelią /auth/category

// Route::get('/authC', function () {
//     return view('backend.category.create');
// });

Route::group(['prefix'=>'auth'], function() {

    // Kategorijos kelias
    Route::resource('/category',CategoryController::class);
    // Subkategorijos kelias
    Route::resource('/subcategory', SubcategoryController::class);
    // Vaikinės kategorijos
    Route::resource('/childcategory', ChildcategoryController::class);
});

Route::get('/', [MenuController::class, 'menu']);

// Skelbimai
Route::get('/ads/create', [AdvertisementController::class, 'create']);

// View::composer(['*'],function($view){
//     $menus = App\Models\Category::with('subcategories')->get();
//     $view->with('menus',$menus);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');