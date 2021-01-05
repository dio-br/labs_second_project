<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
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

Route::get("/", [HomeController::class , "index"])->name("home");
Route::get("/service", [ServiceController::class, "index"])->name("service");
Route::get("/blog", [BlogController::class, "index"])->name("blog");
Route::get("/blogpost", [BlogPostController::class, "index"])->name("blogpost");
Route::get("/contact", [ContactController::class, "index"])->name("contact");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', function() {
    return view('homeLTE');
})->name('homeLTE')->middleware('auth');
