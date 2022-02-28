<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RylanristiaController;
use App\Http\Controllers\SplashscreenController;
use App\Http\Controllers\TweetsenderController;
use App\Http\Controllers\TxtsliderController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WeverseController;
use Illuminate\Support\Facades\Auth;
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


Route::redirect('/register', '/login');
Route::redirect('/password/reset', '/login');
Route::redirect('/password/email', '/login');
route::get('/hi-april', [SplashscreenController::class, 'index'])->name('index');
route::get('/start-page', [WelcomeController::class, 'index'])->name('welcome');
route::get('/from-me', [RylanristiaController::class, 'index'])->name('from-me');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/twitter', [TweetsenderController::class, 'index'])->name('twitter-sender');
    Route::get('/weverse', [WeverseController::class, 'index'])->name('weverse');
    route::get('/tomorrow-x-together', [TxtsliderController::class, 'index'])->name('txt');
    Route::resource('twitter', TweetsenderController::class);
});