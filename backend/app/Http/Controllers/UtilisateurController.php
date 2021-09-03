<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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

        'nomCompletU'=>$request->nomcompletu,
        'emailU'=>$request->emailu,
        'mdpU'=>bcrypt($request->mdpu),
        'telephoneU'=>$request->telephoneu,
        'idPackage'=>$request->idPackage

        ]
        
        );

        if($utilisateur){
            Toastr::success('utilisateur créé avec succès','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La création a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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
 
         'nomCompletU'=>$request->nomcompletu,
         'emailU'=>$request->emailu,
         'mdpU'=>bcrypt($request->mdpu),
         'telephoneU'=>$request->telephoneu,
         'idPackage'=>$request->idpackage
 
         ]
         
         );
 
         if($test){
            Toastr::success('utilisateur modifié avec succès','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La modification a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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
            Toastr::success('utilisateur supprimé avec succès','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La suppréssion a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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
            Toastr::success('package souscrit  avec succès','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La souscription a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
 
    }


}
