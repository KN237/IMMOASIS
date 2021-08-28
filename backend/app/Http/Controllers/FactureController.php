<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Locataire;
use App\Models\Utilisateur;
use App\Models\Bailleur;
use App\Models\Bien;
use App\Models\Location;
use App\Models\Quittance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facture=Facture::all();

        return $facture;
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
        $facture=Facture::create(
            
            [ 'idLocation'=>$request->idLocation,
            'datefacture'=>$request->datefacture,
            'datedebutfacture'=>$request->datedebutfacture,
            'datefinfacture'=>$request->datefinfacture,
            'datelimitefacture'=>$request->datelimitefacture,
            'etatfacture'=>$request->etatfacture
         
         ]
         
         );
 
         if($facture){
 
             return response()->json([
 
                 'succes'=>'facture ajoutée avec succès'
 
             ],200);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        return $facture;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        $test=$facture->update(
            
            [ 'idLocation'=>$request->idLocation,
            'datefacture'=>$request->datefacture,
            'datedebutfacture'=>$request->datedebutfacture,
            'datefinfacture'=>$request->datefinfacture,
            'datelimitefacture'=>$request->datelimitefacture,
            'etatfacture'=>$request->etatfacture
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'facture modifiée avec succès'
 
             ],200);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        $test=$facture->delete();
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'facture supprimée avec succès'
 
             ],200);
         }
    }

    public function search(Request $request)
    {
        
        $result = Facture::where('idLocation',$request->key)->get();

        if($result){

            return $result;
        }

    }


    public function print(Facture $facture)
    {
            
        $locataire=Locataire::where('idlocation',$facture->getAttributes('idlocation'))->first();

        $location=Location::where('idlocation',$facture->getAttributes('idlocation'))->first();

        $bien=Bien::where('idbien',$location->getAttributes('idbien'))->first();

        $bailleur=Bailleur::where('idbailleur',$bien->getAttributes('idbailleur'))->first();

        $ba=Utilisateur::where('idu',$bailleur->getAttributes('idu'))->first();

        $loc=Utilisateur::where('idu',$locataire->getAttributes('idu'))->first();
        
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/facture',['facture'=>$facture,'locataire'=>$locataire,'bailleur'=>$bailleur,'ba'=>$ba,'loc'=>$loc,'location'=>$location]);

        return $pdf->stream('facture'.$facture->idLocation.now().'.pdf');

        
    }


    public function printQuittance(Facture $facture)
    {
            
        $locataire=Locataire::where('idlocation',$facture->getAttributes('idlocation'))->first();

        $location=Location::where('idlocation',$facture->getAttributes('idlocation'))->first();

        $bien=Bien::where('idbien',$location->getAttributes('idbien'))->first();

        $bailleur=Bailleur::where('idbailleur',$bien->getAttributes('idbailleur'))->first();

        $ba=Utilisateur::where('idu',$bailleur->getAttributes('idu'))->first();

        $loc=Utilisateur::where('idu',$locataire->getAttributes('idu'))->first();

        $quittance=Quittance::where('idlocation',$facture->getAttributes('idlocation'))->first();
        
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/quittance',['facture'=>$facture,'quittance'=>$quittance,'locataire'=>$locataire,'bailleur'=>$bailleur,'ba'=>$ba,'loc'=>$loc,'location'=>$location]);

        return $pdf->stream('quittance'.$quittance->idLocation.now().'.pdf');

    }

    public function generateQuittance(Facture $facture){

        $quittance=Quittance::create(
            
            ['idLocation'=>$facture->getAttributes('idLocation'),
            'dateQuittance'=>now(),
            'montantQuittance'=>$facture->getAttributes('montantfacture')
         
         ]
         
         );
 
         if($quittance){
 
             return response()->json([
 
                 'succes'=>'quittance générée avec succès'
 
             ],200);
         }
    

    }


    public function consultQuittance(Facture $facture,$id){

        $locataire=Utilisateur::where('idu',session('loggedUser')->idu)->first();
        $locations=Location::where('idlocataire',$locataire->idlocataire)->get();
        $idLocationArray=[];

        foreach($locations as $location){

            $idLocationArray=+$location->idLocataire;

        }


        return $quittance=DB::table('quittance')->where('idlocation',$idLocationArray)->get();

    }

    public function pay(){

    }
}
