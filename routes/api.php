<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiCategoryController;
use App\Http\Controllers\API\ApiAdressController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category', [ApiCategoryController::class, 'getCategory']);
Route::get('/subcategory', [ApiCategoryController::class, 'getSubcategory']);
Route::get('/childcategory', [ApiCategoryController::class, 'getChildcategory']);

Route::get('/country', [ApiAdressController::class, 'getCountry']);
Route::get('/state', [ApiAdressController::class, 'getState']);
Route::get('/city', [ApiAdressController::class, 'getCity']);