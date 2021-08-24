<?php

namespace App\Http\Controllers;

use App\Models\EtatLieux;
use Illuminate\Http\Request;

class EtatLieuxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etatLieux=EtatLieux::all();

        return $etatLieux;
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
        $etatLieux=EtatLieux::create(
            
            [ 
                'idBien'=>$request->idBien,
                'descriptionEtatLieu'=>$request->descriptionEtatLieu,
                'dateEtatLieu'=>$request->dateEtatLieu,
         
         ]
         
         );
 
         if($etatLieux){
 
             return response()->json([
 
                 'succes'=>'état des lieux ajouté avec succès'
 
             ],200);
         }
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EtatLieux  $etatLieux
     * @return \Illuminate\Http\Response
     */
    public function show(EtatLieux $etatLieux)
    {
        return $etatLieux;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EtatLieux  $etatLieux
     * @return \Illuminate\Http\Response
     */
    public function edit(EtatLieux $etatLieux)
    {
        return $etatLieux;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EtatLieux  $etatLieux
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EtatLieux $etatLieux)
    {
        $test=$etatLieux->update(
            
            [ 
                'idBien'=>$request->idBien,
                'descriptionEtatLieu'=>$request->descriptionEtatLieu,
                'dateEtatLieu'=>$request->dateEtatLieu,
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'état des lieux modifié avec succès'
 
             ],200);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EtatLieux  $etatLieux
     * @return \Illuminate\Http\Response
     */
    public function destroy(EtatLieux $etatLieux)
    {
        $test=$etatLieux->delete();
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'état des lieux supprimé avec succès'
 
             ],200);
         }
    }

    public function search(Request $request)
    {
        
        $result =EtatLieux::where('idBien',$request->key)->get();

        if($result){

            return $result;
        }

    }

    public function sign(Request $request)
    {
        
        

    }


    public function print(Request $request)
    {
        
        
    }
}
