<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\ReservationController;
use App\Http\Controllers\web\AchateController;
use App\Http\Controllers\web\ImmobiliersController;
use App\Http\Controllers\web\UserController;
use App\Http\Controllers\web\ProfoleController;
use App\Http\Controllers\web\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\socilaliteControllerApi;
use App\Http\Controllers\web\ImmobiliersEnCoursController;
use Laravel\Socialite\Facades\Socialite;

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
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware('admin')->group(function () {

    Route::resource('/',IndexController::class);
    Route::resource('reservations',ReservationController::class);

    // Route::put('/valide/{valide}',[ReservationController::class,'valideReservation'])->name('valide');
    Route::get('reservations/filterEtate/{etate}',[ReservationController::class,'filterEtate'])->name('reservations.filterEtate');

    Route::resource('achates',AchateController::class);
    Route::get('achats/filterEtate/{etate}',[AchateController::class,'filterEtate'])->name('achats.filterEtate');
    Route::resource('immobiliers',ImmobiliersController::class);
    Route::resource('immobiliersEncours',ImmobiliersEnCoursController::class);
    Route::resource('users',UserController::class);
    Route::resource('profiles',ProfoleController::class);
    Route::resource('reviews',ReviewController::class);

});

// Route::get('admins',[App\Http\Controllers\AdminController::class, 'login']);
// Route::post('admins',[App\Http\Controllers\AdminController::class, 'logou'])->name('logind');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/auth/redirect', function () {
//   return Socialite::driver('github')->redirect();
// });

// Route::get('/auth/callback', function () {
//   $user = Socialite::driver('github')->user();
// dd($user);
//   // $user->token
// });
// Route::get('/auth/social',[socilaliteControllerApi::class,'redirectToGoogle']);
// Route::get('/auth/google/callback',[socilaliteControllerApi::class,'handleGoogleCallback'])->middleware('web');
Route::get('virefiy_email/{token}',[AuthController::class,'verifierEmail']);