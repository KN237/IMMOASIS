<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrat=Contrat::all();

        return $contrat;
    }

    public function indexBailleur()
    {
        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->get();
        $bien=Bien::where('idbailleur',$bailleur->idbailleur)->get();
        $contrat=Contrat::where('idbien',$bien->idbien)->get();

        return $contrat;
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
        $contrat=Contrat::create(
            
            [ 
                'idBien'=>$request->idbien,
                
         ]
         
         );
 
         if($contrat){
 
             return response()->json([
 
                 'succes'=>'contrat ajouté avec succès'
 
             ],200);
         }
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        return $contrat;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrat $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrat $contrat)
    {
        return $contrat;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrat $contrat)
    {
        $test=$contrat->update(
            
            [ 
                'idbien'=>$request->idbien,
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'contrat modifié avec succès'
 
             ],200);
         }
    }

    public function signBailleur(Contrat $contrat)
    {
        $test=$contrat->update(
            
            [ 
                'signBailleur'=>1,
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'contrat signé par le bailleur avec succès'
 
             ],200);
         }
    }


    public function signLocataire(Contrat $contrat)
    {
        $test=$contrat->update(
            
            [ 
                'signLocataire'=>1,
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'contrat signé par le locataire avec succès'
 
             ],200);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrat $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrat $contrat)
    {
        $test=$contrat->delete();
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'contrat supprimé avec succès'
 
             ],200);
         }
    }

    public function print(Contrat $contrat)
    {
        
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/Contrat',['Contrat'=>$contrat]);

        return $pdf->stream('Contrat'.$contrat->idbien.now().'pdf');

    }


}
