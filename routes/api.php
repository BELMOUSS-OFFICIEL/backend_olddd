<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\indexControllerApi;
use App\Http\Controllers\Api\ImmobiliersControllerApi ;
use App\Http\Controllers\Api\MediasApi ;
use App\Http\Controllers\Api\ReservationApi ;
use App\Http\Controllers\Api\AchateControllerApi;
use App\Http\Controllers\Api\ReviewController ;
use App\Http\Controllers\Api\socilaliteControllerApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/login', [AuthController::class,'login'] )->middleware('guest:sanctum');
Route::post('/register', [AuthController::class,'register'] )->middleware('guest:sanctum');;
Route::resource('index',indexControllerApi::class);
Route::resource('immobiliers',ImmobiliersControllerApi::class);

 Route::resource('medias',MediasApi::class);
 Route::resource('reservations',ReservationApi::class);
 Route::resource('achates',AchateControllerApi::class);
 Route::resource('reviews',ReviewController::class);

//  Route::get('/auth/social',[socilaliteControllerApi::class,'redirectToGoogle']);
//  Route::get('/auth/google/callback',[socilaliteControllerApi::class,'handleGoogleCallback'])->middleware('web');