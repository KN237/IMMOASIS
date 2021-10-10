<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Location;
use App\Models\Bailleur;
use App\Models\Invitation;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class BailleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $bailleur=Bailleur::create(
            
            [ 
                'numcni'=>$request->numcni,
                'idu'=>session('LoggedUser'),
                'telephone'=>$request->telephone,
                'ville'=>$request->ville,
                'quartier'=>$request->quartier,
                'datenaiss'=>$request->datenaiss,
                'nomrep'=>$request->nomrep,
                'telrep'=>$request->telrep,
                'signature'=>'',
                'profession'=>$request->profession,
         
         ]
         
         );

         if($Bailleur){
            Toastr::success('Bailleur créé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La création a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bailleur  $Bailleur
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bailleur  $Bailleur
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bailleur  $Bailleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bailleur $Bailleur)
    {
        $test=$Bailleur->update(
            
            [ 
                'numcni'=>$request->numcni,
                'telephone'=>$request->telephone,
                'ville'=>$request->ville,
                'quartier'=>$request->quartier,
                'datenaiss'=>$request->datenaiss,
                'nomrep'=>$request->nomrep,
                'telrep'=>$request->telrep,
         ]
         
         );

         if($test){
            Toastr::success('Bailleur modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La modification a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bailleur  $Bailleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bailleur $Bailleur)
    {
        $test=Location::where('idBailleur',$Bailleur->idBailleur)->delete();

        if($test){
            Toastr::success('Bailleur supprimé de votre liste avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La suppréssion a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


   
}
