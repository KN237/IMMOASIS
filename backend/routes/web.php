<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/test', function () {
    return view('admin.dashboard');
});

Route::post('/save', [AuthController::class, 'save'])->name('auth.save');
Route::post('/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/admin/dashboard', [AuthController::class, 'dashboard']);
});




Route::Resource('utilisateur', 'App\Http\Controllers\UtilisateurController');




// etat des lieux  //

Route::Resource('etat_des_lieux', 'App\Http\Controllers\EtatLieuxController');

Route::get('etat_des_lieux/pdf/{etatLieux}', 'App\Http\Controllers\EtatLieuxController@print');

Route::get('etat_des_lieux/bailleur', 'App\Http\Controllers\EtatLieuxController@indexBailleur');

Route::get('etat_des_lieux/locataire', 'App\Http\Controllers\EtatLieuxController@indexLocataire');


// renovation //

Route::Resource('renovation', 'App\Http\Controllers\RenovationController');

Route::get('renovation/pdf/{renovation}', 'App\Http\Controllers\RenovationController@print');

Route::get('renovation/bailleur', 'App\Http\Controllers\RenovationController@indexBailleur');

Route::get('renovation/locataire', 'App\Http\Controllers\RenovationController@indexLocataire');


// inventaire //

Route::Resource('inventaire', 'App\Http\Controllers\InventaireController');

Route::get('inventaire/pdf/{inventaire}', 'App\Http\Controllers\InventaireController@print');

Route::get('inventaire/bailleur', 'App\Http\Controllers\InventaireController@indexBailleur');

Route::get('inventaire/locataire', 'App\Http\Controllers\InventaireController@indexLocataire');


// article //

Route::Resource('article', 'App\Http\Controllers\ArticleController');

Route::get('article/bailleur', 'App\Http\Controllers\ArticleController@indexBailleur');



// contrat //

Route::Resource('contrat', 'App\Http\Controllers\ContratController');

Route::get('contrat/pdf/{contrat}', 'App\Http\Controllers\ContratController@print');

Route::get('contrat/bailleur', 'App\Http\Controllers\ContratController@indexBailleur');


// facture //
Route::get('facture/bailleur', 'App\Http\Controllers\FactureController@indexBailleur');
Route::get('facture/locataire', 'App\Http\Controllers\FactureController@indexLocataire');
Route::get('facture/{facture}/pdf', 'App\Http\Controllers\FactureController@print');

Route::get('facture/{facture}/quittance/pdf', 'App\Http\Controllers\FactureController@printQuittance');

Route::get('facture/{facture}/quittance/generer', 'App\Http\Controllers\FactureController@generateQuittance');

Route::get('facture/{facture}/quittance/{id}/consulter', 'App\Http\Controllers\FactureController@consultQuittance');

Route::Resource('facture', 'App\Http\Controllers\FactureController');



// bien //

Route::Resource('bien', 'App\Http\Controllers\BienController');
Route::get('bien/bailleur', 'App\Http\Controllers\BienController@indexBailleur');


// locataire //

Route::Resource('locataire', 'App\Http\Controllers\LocataireController');
Route::post('locataire/add/{id}', 'App\Http\Controllers\LocataireController@add');
Route::get('locataire/liste', 'App\Http\Controllers\LocataireController@all');



// location //

Route::Resource('location', 'App\Http\Controllers\LocationController');
Route::get('location/locataire', 'App\Http\Controllers\LocationController@indexLocataire');
Route::get('location/bailleur', 'App\Http\Controllers\LocationController@indexBailleur');


// utilisateur/package/

Route::get('/souscription/{utilisateur}/package/{id}', 'App\Http\Controllers\UtilisateurController@package');



//package//

Route::Resource('package', 'App\Http\Controllers\PackageController');


//artisan//

Route::Resource('artisan', 'App\Http\Controllers\ArtisanController');
Route::post('artisan/{artisan}/note', 'App\Http\Controllers\ArtisanController@note');




//Type de location/

Route::Resource('type_de_location', 'App\Http\Controllers\TLController');

//Type de bien//

Route::Resource('type_de_bien', 'App\Http\Controllers\TBController');


//Piece/

Route::Resource('piece', 'App\Http\Controllers\PieceController');


//Equipement/

Route::Resource('tequipement', 'App\Http\Controllers\EquipementController');


//enregistrement signature //


Route::post('/locataire/sign', 'App\Http\Controllers\SignLocataireController@store');

Route::post('/bailleur/sign', 'App\Http\Controllers\SignBailleurController@store');


// signature inventaire //


Route::post('/inventaire/locataire/sign', 'App\Http\Controllers\InventaireController@signLocataire');

Route::post('/inventaire/bailleur/sign', 'App\Http\Controllers\InventaireController@signBailleur');


// signature contrat//


Route::post('/contrat/locataire/sign', 'App\Http\Controllers\ContratController@signLocataire');

Route::post('/contrat/bailleur/sign', 'App\Http\Controllers\ContratController@signBailleur');



// signature etat des lieux /


Route::post('/etat_des_lieux/locataire/sign', 'App\Http\Controllers\EtatLieuxController@signLocataire');

Route::post('/etat_des_lieux/bailleur/sign', 'App\Http\Controllers\EtatLieuxController@signBailleur');
