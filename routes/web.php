<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ChildcategoryController;

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

Route::get('/', function () {
    return view('index');
});

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');