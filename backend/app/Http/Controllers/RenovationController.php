<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Locataire;
use App\Models\Location;
use App\Models\Renovation;
use Illuminate\Http\Request;

class RenovationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $renovation=Renovation::all();

        return $renovation;
    }

    public function indexBailleur()
    {
        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->get();
        $bien=Bien::where('idbailleur',$bailleur->idbailleur)->get();
        $renovation=Renovation::where('idbien',$bien->idbien)->get();

        return $renovation;
    }

    public function indexLocataire()
    {
        $locataire=Locataire::where('idu',session('loggedUser')->idu)->get();
        $location=Location::where('idLocataire',$locataire->idLocataire)->get();
        $renovation=Renovation::where('idbien',$location->idbien)->get();

        return $renovation;
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
        $renovation=Renovation::create(
            
            [ 
                'idBien'=>$request->idbien,
                'motifRenovation'=>$request->motifrenovation,
                'domaineRenovation'=>$request->domainerenovation,
                'descriptionRenovation'=>$request->descriptionrenovation,
                'montantRenovation'=>$request->montantrenovation,
                'priorite'=>$request->priorite,
                'statut'=>$request->statut,
         
         ]
         
         );
 
         if($renovation){
 
             return response()->json([
 
                 'succes'=>'rénovation ajoutée avec succès'
 
             ],200);
         }
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Renovation  $renovation
     * @return \Illuminate\Http\Response
     */
    public function show(Renovation $renovation)
    {
        return $renovation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Renovation $renovation
     * @return \Illuminate\Http\Response
     */
    public function edit(Renovation $renovation)
    {
        return $renovation;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Renovation  $renovation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renovation $renovation)
    {
        $test=$renovation->update(
            
            [ 
                'idBien'=>$request->idbien,
                'motifRenovation'=>$request->motifrenovation,
                'domaineRenovation'=>$request->domainerenovation,
                'descriptionRenovation'=>$request->descriptionrenovation,
                'montantRenovation'=>$request->montantrenovation,
                'priorite'=>$request->priorite,
                'statut'=>$request->statut,
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'rénovation modifiée avec succès'
 
             ],200);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Renovation $renovation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renovation $renovation)
    {
        $test=$renovation->delete();
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'rénovation supprimée avec succès'
 
             ],200);
         }
    }

    public function print(Renovation $renovation)
    {
        
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/renovation',['renovation'=>$renovation]);

        return $pdf->stream('Renovation'.$renovation->idbien.now().'pdf');

    }


}
