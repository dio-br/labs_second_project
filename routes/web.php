<?php
use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminFooterController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminLogoController;
use App\Http\Controllers\AdminMapController;
use App\Http\Controllers\AdminNavController;
use App\Http\Controllers\AdminNewsletterController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlocRapidController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IconePrimeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MyProfilController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterController;
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
use App\Models\Article;
use Database\Factories\IconePrimeFactory;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// route pour front end

Route::get("/", [HomeController::class , "index"])->name("home");

Route::get("/service", [ServiceController::class, "index"])->name("service");

Route::get("/blog", [BlogController::class, "index"])->name("blog");

Route::get("/contact", [ContactController::class, "index"])->name("contact");

// admin pages

Route::get("/admin/user", [AdminUserController::class, "index"])->middleware(["check", "reda"])->name("adminUser");

Route::get("/admin/nav", [AdminNavController::class, "index"])->middleware("reda")->name("adminNav");

Route::get("/admin/logo", [AdminLogoController::class, "index"])->middleware("reda")->name("adminLogo");

Route::get("/admin/home", [AdminHomeController::class, "index"])->middleware(["home", "reda"])->name("adminHome");

Route::get("/admin/service", [AdminServiceController::class, "index"])->middleware("reda", "membre")->name("adminService");

Route::get("/admin/profil", [MyProfilController::class, "index"])->name("myProfil");

Route::get("/admin/blog", [AdminBlogController::class, "index"])->middleware("membre")->name("adminBlog");

Route::get("/admin/newsletter", [AdminNewsletterController::class, "index"])->middleware(["reda"])->name("adminNewsletter");

Route::get("/admin/footer", [AdminFooterController::class, "index"])->middleware(["reda"])->name("adminFooter");

Route::get("/blogpost/{id}", [BlogPostController::class, "index"]);

Route::get("/admin/map", [AdminMapController::class, "index"])->middleware("acces")->name("adminMap");



// Ressource ( crud)
Route::resource("/user", UserController::class);

Route::resource("/backoff/navbar", NavbarController::class);

Route::resource("/backoff/logo", LogoController::class);

Route::resource("/backoff/banner", BannerController::class);

Route::resource("backoff/serviceHome", ServiceHomeController::class);

Route::resource("/backoff/aboutContent", AboutContentController::class);

Route::resource("/backoff/titreTestimonial", TitreTestimonialController::class);

Route::resource("/backoff/testimonial", TestimonialController::class);

Route::resource("/backoff/titreService", TitreServiceController::class);

Route::resource("/backoff/titreTeam", TitreTeamController::class);

Route::resource("/backoff/profilTeam", ProfilTeamController::class);

Route::resource("/backoff/titreSlogan", TitreSloganController::class);

Route::resource("/backoff/ready", ReadyController::class);

Route::resource("/backoff/homeContact", HomeContactController::class);

Route::resource("/backoff/servicePrime", ServicePrimeController::class);

Route::resource("/backoff/iconePrime", IconePrimeController::class);

Route::resource("/backoff/blocRapid", BlocRapidController::class);

Route::resource("/backoff/article", ArticleController::class);

Route::post("/commentaire/{id}", [CommentaireController::class,"store"]);
Route::post("/commentaire/{id}", [CommentaireController::class,"destroy"]);


Route::resource("/backoff/newsletter", NewsletterController::class);

Route::resource("/backoff/footer", FooterController::class);

Route::resource("/backoff/address", AddressController::class);

Route::resource("/backoff/category", CategoryController::class);


// Mail
Route::post("/send-email", [MailController::class, "sendMail"]);
 
Route::post('/send-article/{id}', [ArticleController::class, 'sendArticle']);

// dash

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', function() {
    return view('homeLTE');
})->name('homeLTE')->middleware('auth');
