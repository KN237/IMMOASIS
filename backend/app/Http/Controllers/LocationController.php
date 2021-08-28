<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBailleur()
    {
       
        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->first();

        $biens=Bien::where('idbailleur',$bailleur->idbailleur)->get();

        $idBienArray=[];

        foreach($biens as $bien){

            $idBienArray=+$bien->idbien;

        }

        $locations=Location::where('idbien', $idBienArray)->get();

        return $locations;
    }

    public function indexLocataire()
    {
       
        $locataire=Locataire::where('idu',session('loggedUser')->idu)->first();

        $locations=Location::where('idlocataire', $locataire->idlocataire)->get();

        return $locations;
    }

    public function index()
    {
       
        

        $locations=Location::all();

        return $locations;
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
        $locataire=Locataire::where('idu',session('loggedUser')->idu)->first();

        $test=Location::create(
            
            [ 
        'utilisation'=>$request->utilisation,
        'activiteLocation'=>$request->activitelocation,
        'idU'=>session('loggedUser')->idu,
        'idLocataire'=>$locataire->idlocataire,
        'idTl'=>$request->idtl,
        'idBien'=>$request->idbien,
        'dateDebutLocation'=>$request->datedebutlocation,
        'dureeLocation'=>$request->dureelocation,
        'montantLocation'=>$request->montantlocation,
        'montantCaution'=>$request->montantcaution
         
         ]
         
         );

         if($test){
     
            return response()->json([

                'succes'=>'location ajoutée avec succès'

            ],200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return $location;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $test=$locataire->update(
            
            [ 
                    'utilisation'=>$request->utilisation,
                    'activiteLocation'=>$request->activitelocation,
                    'idTl'=>$request->idtl,
                    'idBien'=>$request->idbien,
                    'dateDebutLocation'=>$request->datedebutlocation,
                    'dureeLocation'=>$request->dureelocation,
                    'montantLocation'=>$request->montantlocation,
                    'montantCaution'=>$request->montantcaution
         
         ]
         
         );

         if($test){
     
            return response()->json([

                'succes'=>'location modifiée avec succès'

            ],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $test=$locataire->delete();

        if($test){
     
            return response()->json([

                'succes'=>'location supprimée avec succès'

            ],200);
        }
    }
}
