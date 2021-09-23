<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\Locataire;
use App\Models\Renovation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class RenovationController extends Controller
{

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
                'idbien'=>$request->idbien,
                'idartisan'=>$request->idartisan,
                'idu'=>session('LoggedUser'),
                'libelle'=>$request->libelle,
                'description'=>$request->description,
                'montant'=>$request->montant,
                'date'=>$request->date,
                'statut'=>$request->statut,
         
         ]
         
         );
 
         if($renovation){
            Toastr::success('intervention ajoutée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\' ajout a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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
                'idbien'=>$request->idbien,
                'idartisan'=>$request->idartisan,
                'libelle'=>$request->libelle,
                'description'=>$request->description,
                'montant'=>$request->montant,
                'date'=>$request->date,
                'statut'=>$request->statut,
         
         ]
         
         );
 
         if($test){
            Toastr::success('intervention modifiée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La modification a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
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
            Toastr::success('intervention supprimée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La suppréssion a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    public function print(Renovation $renovation)
    {
        
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/renovation',['renovation'=>$renovation]);

        return $pdf->stream('Renovation'.$renovation->idbien.now().'pdf');

    }


}
