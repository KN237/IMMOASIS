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

Route::Resource('utilisateur','App\Http\Controllers\UtilisateurController');

Route::Resource('etat_des_lieux','App\Http\Controllers\EtatLieuxController');

Route::get('etat_des_lieux/pdf/{id}','App\Http\Controllers\EtatLieuxController@print');

Route::post('/utilisateur/recheche','App\Http\Controllers\UtilisateurController@search');

Route::post('/etat_des_lieux/recheche','App\Http\Controllers\EtatLieuxController@search');

Route::post('/locataire/sign','App\Http\Controllers\SignLocataireController@store');

Route::post('/bailleur/sign','App\Http\Controllers\SignBailleurController@store');


