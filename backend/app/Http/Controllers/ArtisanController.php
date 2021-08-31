<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\Artisan;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artisan=Artisan::all();

        return $artisan;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin=Administrateur::where('idu',session('loggedUser')->idu)->first();
        $artisan=Artisan::create(
            
            [ 
 
                'idAdmin'=>$admin->idu,
                'nomCompletArtisan'=>$request->nomcompletartisan,
                'professionArtisan'=>$request->professionartisan,
                'telephoneArtisan'=>$request->telephoneartisan,
 
         ]
         
         );
 
         if($artisan){
 
             return response()->json([
 
                 'succes'=>'artisan ajouté avec succès'
 
             ],200);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artisan  $artisan
     * @return \Illuminate\Http\Response
     */
    public function show(Artisan $artisan)
    {
       return $artisan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artisan  $artisan
     * @return \Illuminate\Http\Response
     */
    public function edit(Artisan $artisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artisan  $artisan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artisan $artisan)
    {
        $test=$artisan->update(
            
            [ 

                'nomCompletArtisan'=>$request->nomcompletartisan,
                'professionArtisan'=>$request->professionartisan,
                'telephoneArtisan'=>$request->telephoneartisan,
 
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'artisan modifié avec succès'
 
             ],200);
         }
    }


    public function note(Request $request, Artisan $artisan)
    {
        $test=$artisan->update(
            
            [ 

                'idartisan'=>$request->idartisan,
                'valeur'=>$request->valeur,
 
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'artisan noté avec succès'
 
             ],200);
         }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artisan  $artisan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artisan $artisan)
    {
        $test=$artisan->delete();
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'artisan supprimé avec succès'
 
             ],200);
         }
    }
}
