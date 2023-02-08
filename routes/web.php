<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ChildcategoryController;
// use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\FrontAdsController;
use App\Http\Controllers\SendMessageController;

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

// Neveikia stilius nurodžius kelią /auth/category

// Route::get('/authC', function () {
//     return view('backend.category.create');
// });

Route::group(['prefix'=>'auth','middleware'=>'admin'], function() {

    // Kelias į administratoriaus puslapį
    Route::get('/', function () {
        return view('backend.admin.index');
    });
    // Kategorijos kelias
    Route::resource('/category',CategoryController::class);
    // Subkategorijos kelias
    Route::resource('/subcategory', SubcategoryController::class);
    // Vaikinės kategorijos
    Route::resource('/childcategory', ChildcategoryController::class);
});

// MenuController pakeistas į FrontAdsController naudojant scope
// Route::get('/', [MenuController::class, 'menu']);

// Skelbimai
Route::get('/ads/create', [AdvertisementController::class, 'create'])->name('ads.create')->middleware('auth');
Route::post('/ads/store', [AdvertisementController::class, 'store'])->middleware('auth')->name('ads.store');
Route::get('/ads', [AdvertisementController::class, 'index'])->name('ads.index')->middleware('auth');
Route::get('/ads/{id}/edit', [AdvertisementController::class, 'edit'])->name('ads.edit')->middleware('auth');
Route::put('/ads/{id}/update', [AdvertisementController::class, 'update'])->name('ads.update')->middleware('auth');
Route::delete('/ads/{id}/delete', [AdvertisementController::class, 'destroy'])->name('ads.destroy')->middleware('auth');
// Profilis
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('update.profile')->middleware('auth');

Route::get('/ads/{userId}/view', [FrontEndController::class, 'viewUserAds'])->name('show.user.ads');

Route::get('/', [FrontAdsController::class, 'index']);
// FrontEnd dalis
Route::get('/product/{categorySlug}', [FrontEndController::class, 'findBasedOnCategory'])->name('category.show');
Route::get('/product/{categorySlug}/{subcategorySlug}', [FrontEndController::class, 'findBasedOnSubcategory'])->name('subcategory.show');
Route::get('/product/{categorySlug}/{subcategorySlug}/{childCategorySlug}', [FrontEndController::class, 'findBasedOnChildcategory'])->name('childcategory.show');
Route::get('/products/{id}/{slug}', [FrontendController::class, 'show'])->name('product.view');
// Pranešimai
Route::post('/send/message', [SendMessageController::class, 'store'])->middleware('auth');
Route::get('messages', [SendMessageController::class, 'index'])->middleware('auth');
Route::get('/users', [SendMessageController::class, 'chatWithThisUser']);
Route::get('/message/user/{id}', [SendMessageController::class, 'showMessages']);
Route::post('/start-conversation', [SendMessageController::class, 'startConversation']);

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
