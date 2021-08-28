<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateur=Utilisateur::all();

        return $utilisateur;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utilisateur=Utilisateur::create(
            
           [ 

        'nomU'=>$request->nomu,
        'nomCompletU'=>$request->nomcompletu,
        'emailU'=>$request->emailu,
        'mdpU'=>bcrypt($request->mdpu),
        'telephoneU'=>$request->telephoneu,
        'idPackage'=>$request->idPackage

        ]
        
        );

        if($utilisateur){

            return response()->json([

                'succes'=>'utilisateur ajouté avec succès'

            ],200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        return $utilisateur;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        return $utilisateur;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $test=$utilisateur->update(
            
            [ 
 
         'nomU'=>$request->nomu,
         'nomCompletU'=>$request->nomcompletu,
         'emailU'=>$request->emailu,
         'mdpU'=>bcrypt($request->mdpu),
         'telephoneU'=>$request->telephoneu,
         'idPackage'=>$request->idpackage
 
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'utilisateur modifié avec succès'
 
             ],200);
         }
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        $test=$utilisateur->delete();


        if($test){

            return response()->json([

                'succes'=>'utilisateur supprimé avec succès'

            ],200);
        }
    }
    public function package(Utilisateur $utilisateur,$id)
    {
        $test=$utilisateur->update(
            
            [ 
         'idPackage'=>$id
 
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'usouscription effectuée avec succès'
 
             ],200);
         }
 
    }


}
