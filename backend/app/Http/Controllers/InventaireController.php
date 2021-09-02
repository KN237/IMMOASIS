<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Locataire;
use App\Models\Location;
use App\Models\Inventaire;
use Illuminate\Http\Request;

class InventaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaire = Inventaire::all();

        return $inventaire;
    }

    public function indexBailleur()
    {
        $bailleur = Bailleur::where('idu', session('loggedUser')->idu)->get();
        $bien = Bien::where('idbailleur', $bailleur->idbailleur)->get();
        $inventaire = Inventaire::where('idbien', $bien->idbien)->get();

        return $inventaire;
    }

    public function indexLocataire()
    {
        $locataire = Locataire::where('idu', session('loggedUser')->idu)->get();
        $location = Location::where('idLocataire', $locataire->idLocataire)->get();
        $inventaire = Inventaire::where('idbien', $location->idbien)->get();

        return $inventaire;
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
        $inventaire = Inventaire::create(

            [
                'idBien' => $request->idbien,
                'descriptionInventaire' => $request->descriptioninventaire,
                'dateInventaire' => $request->dateinventaire,

            ]

        );

        if ($inventaire) {

            return response()->json([

                'succes' => 'inventaire ajouté avec succès'

            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaire  $inventaire
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaire $inventaire)
    {
        return $inventaire;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaire $inventaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaire $inventaire)
    {
        return $inventaire;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaire  $inventaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaire $inventaire)
    {
        $test = $inventaire->update(

            [
                'idBien' => $request->idbien,
                'descriptionInventaire' => $request->descriptioninventaire,
                'dateInventaire' => $request->dateinventaire,

            ]

        );

        if ($test) {

            return response()->json([

                'succes' => 'inventaire modifié avec succès'

            ], 200);
        }
    }

    public function signBailleur(Inventaire $inventaire)
    {
        $test=$inventaire->update(
            
            [ 
                'signBailleur'=>1,
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'inventaire signé par le bailleur avec succès'
 
             ],200);
         }
    }


    public function signLocataire(Inventaire $inventaire)
    {
        $test=$inventaire->update(
            
            [ 
                'signLocataire'=>1,
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'inventaire signé par le locataire avec succès'
 
             ],200);
         }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaire $inventaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaire $inventaire)
    {
        $test = $inventaire->delete();

        if ($test) {

            return response()->json([

                'succes' => 'inventaire supprimé avec succès'

            ], 200);
        }
    }

    public function print(Inventaire $inventaire)
    {

        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/inventaire', ['inventaire' => $inventaire]);

        return $pdf->stream('inventaire' . $inventaire->idbien . now() . 'pdf');
    }
}
