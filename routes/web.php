<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FiltreController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImgortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Filtre;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Role;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
use App\Models\User;
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

Route::get('/', function () {
    $abouts=About::all();
    $titres = Titre::all();
    $contacts = Contact::all();
    $features = Feature::all();
    $footers = Footer::all();
    $homes = Home::all();
    $filtres = Filtre::all();
    $services = Service::all();
    $users = User::all();
    $roles = Role::all();
    $teams = Team::all();
    $testimonials = Testimonial::all();
    return view('welcome',compact("abouts","titres","contacts","features","footers","homes","filtres","services", "users","roles","teams","testimonials"));
});

Route::resource("/homes", HomeController::class);


Route::resource("/abouts", AboutController::class);

Route::resource("/imgortfolios", ImgortfolioController::class);

Route::resource("/services", ServiceController::class);

Route::resource("/testimonials", TestimonialController::class);


Route::resource("/contacts", ContactController::class);

Route::resource("/titres", TitreController::class);

Route::resource("/teams", TeamController::class);

Route::resource("/filtres", FiltreController::class);

Route::resource("/footers", FooterController::class);

Route::resource("/features", FeatureController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
