<?php

use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminLogoController;
use App\Http\Controllers\AdminNavController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfilTeamController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceHomeController;
use App\Http\Controllers\ServicePrimeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreServiceController;
use App\Http\Controllers\TitreSloganController;
use App\Http\Controllers\TitreTeamController;
use App\Http\Controllers\TitreTestimonialController;
use App\Http\Controllers\UserController;
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
Route::get("/admin/user", [AdminUserController::class, "index"])->name("adminUser");
Route::get("/admin/nav", [AdminNavController::class, "index"])->name("adminNav");
Route::get("/admin/logo", [AdminLogoController::class, "index"])->name("adminLogo");
Route::get("/admin/home", [AdminHomeController::class, "index"])->name("adminHome");
Route::get("/admin/service", [AdminServiceController::class, "index"])->name("adminService");

// Ressource
Route::resource("/user", UserController::class);
Route::resource("/navbar", NavbarController::class);
Route::resource("/logo", LogoController::class);
Route::resource("/banner", BannerController::class);
Route::resource("/serviceHome", ServiceHomeController::class);
Route::resource("/aboutContent", AboutContentController::class);
Route::resource("/titreTestimonial", TitreTestimonialController::class);
Route::resource("/testimonial", TestimonialController::class);
Route::resource("/titreService", TitreServiceController::class);
Route::resource("/titreTeam", TitreTeamController::class);
Route::resource("/profilTeam", ProfilTeamController::class);
Route::resource("/titreSlogan", TitreSloganController::class);
Route::resource("/ready", ReadyController::class);
Route::resource("/homeContact", HomeContactController::class);
Route::resource("servicePrime", ServicePrimeController::class);

// Mail
Route::post("/send-email", [MailController::class, "sendMail"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', function() {
    return view('homeLTE');
})->name('homeLTE')->middleware('auth');
