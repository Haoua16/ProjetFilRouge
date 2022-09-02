<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin-register', [App\Http\Controllers\AdministrateurController::class, 'viewForm'])->name('admin.formview');
Route::post('/admin-create', [App\Http\Controllers\AdministrateurController::class, 'registerAdmin'])->name('admin.create');

Route::get('/ges-register', [App\Http\Controllers\GesCourrierController::class, 'viewForm'])->name('ges.formview');
Route::post('/ges-create', [App\Http\Controllers\GesCourrierController::class, 'registerGes'])->name('ges.create');

Route::get('/compt-register', [App\Http\Controllers\ComptableController::class, 'viewForm'])->name('compt.formview');
Route::post('/compt-create', [App\Http\Controllers\ComptableController::class, 'registerCompt'])->name('compt.create');

Route::get('/client-register', [App\Http\Controllers\ClientController::class, 'viewForm'])->name('client.formview');

Route::post('/client-create', [App\Http\Controllers\ClientController::class, 'registerClient'])->name('client.create');

Route::get('/direct-register', [App\Http\Controllers\DirecteurController::class, 'viewForm'])->name('direct.formview');
Route::post('/direct-create', [App\Http\Controllers\DirecteurController::class, 'registerDirect'])->name('direct.create');



Route::resource('chauffeur', 'App\Http\Controllers\ChauffeurController');

Route::resource('passager', 'App\Http\Controllers\PassagerController');

Route::resource('ville', 'App\Http\Controllers\VilleController');

Route::resource('bus', 'App\Http\Controllers\BusController');

Route::resource('courrier', 'App\Http\Controllers\CourrierController');

Route::resource('voyage', 'App\Http\Controllers\VoyageController');

Route::resource('destinationclient', 'App\Http\Controllers\DestinationclientController');

Route::resource('reservation', 'App\Http\Controllers\ReservationController');

Route::resource('bagage', 'App\Http\Controllers\BagageController');

Route::resource('plainte', 'App\Http\Controllers\PlainteController');

Route::resource('commentaire', 'App\Http\Controllers\CommentaireController');

Route::get('/clientvoyage', [App\Http\Controllers\ReservationController::class, 'clientvoyage'])->name('client.voyage');
Route::get('/clientreserv1', [App\Http\Controllers\ReservationController::class, 'clientreserv1'])->name('client.reserv');

Route::get('/comptablevoyage', [App\Http\Controllers\ReservationController::class, 'comptablevoyage'])->name('comptable.voyage');
Route::get('/comptablereservation', [App\Http\Controllers\VoyageController::class, 'comptablereservation'])->name('comptable.reservation');
Route::get('/comptablecourrier', [App\Http\Controllers\CourrierController::class, 'comptablecourrier'])->name('comptable.courrier');
Route::get('/comptablebagage', [App\Http\Controllers\BagageController::class, 'comptablebagage'])->name('comptable.bagage');
Route::get('/comptablereserv1', [App\Http\Controllers\ReservationController::class, 'comptablereserv1'])->name('comptable.reserv');

Route::get('/gescourriervoyage', [App\Http\Controllers\ReservationController::class, 'gescourriervoyage'])->name('gescourrier.voyage');
Route::get('/gescourrierreserv1', [App\Http\Controllers\ReservationController::class, 'gescourrierreserv1'])->name('gescourrier.reserv');


Route::get('/administrateurvoyage', [App\Http\Controllers\ReservationController::class, 'administrateurvoyage'])->name('administrateur.voyage');
Route::get('/administrateurreserv1', [App\Http\Controllers\ReservationController::class, 'administrateurreserv1'])->name('administrateur.reserv1');


Route::get('/directeurvoyage', [App\Http\Controllers\ReservationController::class, 'directeurvoyage'])->name('directeur.voyage');
Route::get('/directeurreservation', [App\Http\Controllers\VoyageController::class, 'directeurreservation'])->name('directeur.reservation');
Route::get('/directeurcourrier', [App\Http\Controllers\CourrierController::class, 'directeurcourrier'])->name('directeur.courrier');
Route::get('/directeurbagage', [App\Http\Controllers\BagageController::class, 'directeurbagage'])->name('directeur.bagage');
Route::get('/directeurlistevoyage', [App\Http\Controllers\ReservationController::class, 'directeurlistevoyage'])->name('directeurliste.voyage');
Route::get('/directeurreserv1', [App\Http\Controllers\ReservationController::class, 'directeurreserv1'])->name('directeur.reserv');

Route::get('/voyage/{vg}/reservation', [App\Http\Controllers\ReservationController::class, 'create'])->name('create.voyage');

Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('reserv.voyage');

// Route::get('/reservation/{vg}/reservation', [App\Http\Controllers\VoyageController::class, 'create'])->name('create.reservation');

// Route::post('/reservation', [App\Http\Controllers\VoyageController::class, 'store'])->name('reserv.reservation');

// Route::resource('reservation', 'ReservationController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\Dashboard::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard-statistique', [App\Http\Controllers\Dashboard::class, 'dashboard'])->name('dashboard');
