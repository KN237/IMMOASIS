<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\Locataire;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
       
        $test=Location::create(
            
            [ 
        'utilisation'=>$request->utilisation,
        'activite'=>$request->activite,
        'idlocataire'=>$request->idlocataire,
        'idtl'=>$request->idtl,
        'idbien'=>$request->idbien,
        'duree'=>$request->duree,
        'montant'=>$request->montant,
        'montantcaution'=>$request->montantcaution
         
         ]
         
         );

         if($test){
            Toastr::success('location créée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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
        $test=$location->update(
            
            [ 
                    'utilisation'=>$request->utilisation,
                    'activite'=>$request->activite,
                    'idtl'=>$request->idtl,
                    'idbien'=>$request->idbien,
                    'duree'=>$request->duree,
                    'montant'=>$request->montant,
                    'montantcaution'=>$request->montantcaution
         
         ]
         
         );

         if($test){
            Toastr::success('location modifiée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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
        $test=$location->delete();

        if($test){
            Toastr::success('location supprimée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('l\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }
}
