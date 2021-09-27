<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use Illuminate\Http\Request;
use App\Models\Administrateur;
use Brian2694\Toastr\Facades\Toastr;

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

                'idpiece'=>$request->idpiece,
                'nom'=>$request->nom,
                'prix'=>$request->prix,
                'quantite'=>$request->quantite

            ]

        ); 

        if($equipement){
            Toastr::success('equipement ajouté avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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
                'nom'=>$request->nom,
                'prix'=>$request->prix,
                'quantite'=>$request->quantite

            ]

        );

        if($test){
            Toastr::success('equipement modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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

        if($test){
            Toastr::success('equipement supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }
}
