<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\Locataire;
use Illuminate\Http\Request;

class LocataireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->first();

        $biens=Bien::where('idbailleur',$bailleur->idbailleur)->get();

        $idBienArray=[];

        foreach($biens as $bien){

            $idBienArray=+$bien->idbien;

        }

        $locations=Location::where('idbien', $idBienArray)->get();

        $idLocationArray=[];

        foreach($locations as $location){

            $idLocationArray=+$location->idlocataire;

        }

        $locataires=Locataire::where('idlocataire', $idLocationArray)->get();

        return $locataires;
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
        
        $locataire=Locataire::create(
            
            [ 
                'numCniLoc'=>$request->numcniloc,
                'idu'=>session('loggedUser')->idU,
                'telephoneSecLoc'=>$request->telephonesecloc,
                'villeLoc'=>$request->villeloc,
                'quartierLoc'=>$request->quartierloc,
                'paysLoc'=>$request->paysloc,
                'dateNaissLoc'=>$request->datenaissloc,
                'sexeLoc'=>$request->sexeloc,
                'lieuNaissLoc'=>$request->lieunaissloc,
                'nomCompletEmployeurLoc'=>$request->nomcompletemployeurloc,
                'telEmployeurLoc'=>$request->telemployeurloc,
                'signatureLoc'=>'',
                'professionLoc'=>$request->professionloc,
                'revenuMensuelLoc'=>$request->revenumensuelloc,
         
         ]
         
         );

         if($locataire){
     
            return response()->json([

                'succes'=>'locataire créé avec succès'

            ],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function show(Locataire $locataire)
    {
        return $locataire;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function edit(Locataire $locataire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locataire $locataire)
    {
        $test=$locataire->update(
            
            [ 
                'numCniLoc'=>$request->numcniloc,
                'telephoneSecLoc'=>$request->telephonesecloc,
                'villeLoc'=>$request->villeloc,
                'quartierLoc'=>$request->quartierloc,
                'paysLoc'=>$request->paysloc,
                'dateNaissLoc'=>$request->datenaissloc,
                'sexeLoc'=>$request->sexeloc,
                'lieuNaissLoc'=>$request->lieunaissloc,
                'nomCompletEmployeurLoc'=>$request->nomcompletemployeurloc,
                'telEmployeurLoc'=>$request->telemployeurloc,
                'signatureLoc'=>'',
                'professionLoc'=>$request->professionloc,
                'revenuMensuelLoc'=>$request->revenumensuelloc,
         
         ]
         
         );

         if($test){
     
            return response()->json([

                'succes'=>'locataire modifié avec succès'

            ],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locataire $locataire)
    {
        $test=$locataire->delete();

        if($test){
     
            return response()->json([

                'succes'=>'locataire supprimé avec succès'

            ],200);
        }
    }


    public function add(Request $request,$id){

    $location=new Location();
    $location->idlocataire= $id;

    // Après avoir choisis le locataire, il faudra aussi choisir le bien //

    $location->idbien= $request->idbien;
    $test=$location->save();

    if($test){
     
        return response()->json([

            'succes'=>'locataire ajouté avec succès'

        ],200);
    }

}

public function all(){

    $locataire=Locataire::all();

    return $locataire;
}


}
