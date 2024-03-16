<?php

use App\Http\Controllers\ApfnpController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// PAGE ACCUEIL
Route::get('accueil', [ApfnpController::class, 'index'])->name('accueil');

//PAGE QUI SOMMES NOUS
Route::get('qui-sommes-nous', [ApfnpController::class, 'quiSommesNous'])->name('qui-sommes-nous');
 
//PAGE PARTENAIRE
Route::get('partenaire', [ApfnpController::class, 'partenaire'])->name('partenaire');
 
//PAGE ACTIVITE
Route::get('activite', [ApfnpController::class, 'activite'])->name('acitivite');

//PAGE PROJETS EN COURS
Route::get('encours', [ApfnpController::class, 'projetEnCours'])->name('encours');

//PAGE PROJET EXECUTES
Route::get('execute', [ApfnpController::class, 'projetExecute'])->name('execute');

//PAGE RESSOURCE GALERIE
Route::get('galerie', [ApfnpController::class, 'ressourceGalerie'])->name('galerie'); 

//PAGE RESSOURCE VIDEO
Route::get('video', [ApfnpController::class, 'ressourceVideo'])->name('video'); 

//PAGE TEXTE DE LOI
Route::get('texte-de-loi', [ApfnpController::class, 'ressourceTexteDeLoi'])->name('texte-de-loi'); 

//PAGE CONTACT
Route::get('contact', [ApfnpController::class, 'contact'])->name('contact'); 