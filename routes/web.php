<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApfnpController;

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
// Route::get('accueil', [ApfnpController::class, 'index'])->name('accueil');

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

//PAGE PUBLICATION
Route::get('publication', [ApfnpController::class, 'publication'])->name('publication');

//PAGE TEXTE DE LOI  "ACCORDS INTERNATIONAUX RATIFIÉS"
Route::get('texte-de-loi-accords-internationaux-ratifies', [ApfnpController::class, 'accordsInternationauxRatifies'])->name('texte-de-loi-accords-internationaux-ratifies');

//PAGE TEXTE DE LOI  "LOIS"
Route::get('texte-de-loi-lois', [ApfnpController::class, 'lois'])->name('lois');

//PAGE TEXTE DE LOI  "DÉCRETS"
Route::get('texte-de-loi-decrets', [ApfnpController::class, 'decrets'])->name('decrets');

//PAGE TEXTE DE LOI  "ARRÊTÉS"
Route::get('texte-de-loi-arretes', [ApfnpController::class, 'arretes'])->name('arretes');

//PAGE TEXTE DE LOI  "DÉCISIONS"
Route::get('texte-de-loi-decisions', [ApfnpController::class, 'decisions'])->name('decisions');

//PAGE CONTACT
Route::get('contact', [ApfnpController::class, 'contact'])->name('contact'); 

//ADMIN

Route::middleware(['auth'])->group(function () {

  
    
    });
      // Ensemble des routes
      Route::prefix('admin')->group(function () {
        Route::get('/login', [ApfnpController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [ApfnpController::class, 'login'])->name('traitementConnexion');
        Route::get('/dashboard', [ApfnpController::class, 'dashboard'])->name('dashboard');
        Route::get('/encours', [ApfnpController::class,'enCours'])->name('encours');
        Route::get('/executes', [ApfnpController::class,'executes'])->name('executes');
        Route::get('/galeries', [ApfnpController::class, 'galeries'])->name('galeries');
        Route::get('/videos', [ApfnpController::class, 'videos'])->name('videos');
        Route::get('/accords-internationaux-ratifie', [ApfnpController::class, 'accordsInternationauxRatifie'])->name('accords-internationaux-ratifie');
        Route::get('/loi', [ApfnpController::class, 'loi'])->name('loi');
        Route::get('/decret', [ApfnpController::class, 'decret'])->name('decret');
        Route::get('/arrete', [ApfnpController::class, 'arrete'])->name('arrete');
        Route::get('/decision', [ApfnpController::class, 'decision'])->name('decision');
        
    
    });


    Route::get('generate-password', function () {
     return Hash::make('123456');
   });