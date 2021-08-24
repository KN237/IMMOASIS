<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('utilisateur','App\Http\Controllers\UtilisateurController');

Route::apiResource('etat_des_lieux','App\Http\Controllers\EtatLieuxController');

Route::post('/utilisateur/recheche','App\Http\Controllers\UtilisateurController@search');

Route::post('/etat_des_lieux/recheche','App\Http\Controllers\EtatLieuxController@search');

Route::post('/locataire/sign','App\Http\Controllers\SignLocataireController@store');

Route::post('/bailleur/sign','App\Http\Controllers\SignBailleurController@store');
