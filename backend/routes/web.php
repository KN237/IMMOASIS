<?php

use App\Models\Utilisateur;
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
    return view('welcome');
});

Route::get('/test', function () {
    return view('pdf.quittance');
});

Route::Resource('utilisateur','App\Http\Controllers\UtilisateurController');

                           // etat des lieux  //

Route::Resource('etat_des_lieux','App\Http\Controllers\EtatLieuxController');

Route::get('etat_des_lieux/pdf/{etatLieux}','App\Http\Controllers\EtatLieuxController@print');

                            // facture //

Route::get('facture/{facture}/pdf','App\Http\Controllers\FactureController@print');

Route::get('facture/{facture}/quittance/pdf','App\Http\Controllers\FactureController@printQuittance');

Route::get('facture/{facture}/quittance/generer','App\Http\Controllers\FactureController@generateQuittance');

Route::get('facture/{facture}/quittance/{id}/consulter','App\Http\Controllers\FactureController@consultQuittance');

Route::Resource('facture','App\Http\Controllers\FactureController');

                            

                            // bien //
Route::Resource('bien','App\Http\Controllers\BienController');



                    // signature //


Route::post('/locataire/sign','App\Http\Controllers\SignLocataireController@store');

Route::post('/bailleur/sign','App\Http\Controllers\SignBailleurController@store');


