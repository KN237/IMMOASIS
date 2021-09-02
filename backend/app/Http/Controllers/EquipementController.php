<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\Equipement;
use Illuminate\Http\Request;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipement = Equipement::all();

        return $equipement;
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

        $equipement = Equipement::create(

            [

                'idPiece'=>$request->idpiece,
                'nomEquipement'=>$request->nomequipement,
                'etatEquipement'=>$request->etatequipement,
                'prixEquipement'=>$request->prixequipement,
                'commentaire'=>$request->commentaire

            ]

        ); 

        if ($equipement) {

            return response()->json([

                'succes' => 'Equipement ajouté avec succès'

            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function show(Equipement $equipement)
    {
        return $equipement;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipement $equipement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipement $equipement)
    {
        $test = $equipement->update(

            [

                'idPiece'=>$request->idpiece,
                'nomEquipement'=>$request->nomequipement,
                'etatEquipement'=>$request->etatequipement,
                'prixEquipement'=>$request->prixequipement,
                'commentaire'=>$request->commentaire

            ]

        );

        if ($test) {

            return response()->json([

                'succes' => 'Equipement modifié avec succès'

            ], 200);
        }
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipement $equipement)
    {
        $test = $equipement->delete();

        if ($test) {

            return response()->json([

                'succes' => 'Equipement supprimé avec succès'

            ], 200);
        }
    }
}
