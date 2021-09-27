<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use Illuminate\Http\Request;
use App\Models\EtatEquipement;
use Brian2694\Toastr\Facades\Toastr;

class EtatEquipementController extends Controller
{
    public function store(Request $request)
    {
        

        for($i=0;$i<count($request->inventaire['idequipement']);$i++){
                
            $test=EtatEquipement::where('idequipement',$request->inventaire['idequipement'][$i])->where('date',$request->inventaire['date'][$i])->first();

            if($test){

                $equipement = $test->update(

                    [
        
                        'idequipement'=>$request->inventaire['idequipement'][$i],
                        'date'=>$request->inventaire['date'][$i],
                        'valeur'=>$request->inventaire['valeur'][$i],
                        'commentaire'=>$request->inventaire['commentaire'][$i]
        
                    ]
        
                );

            }

       else{ $equipement = EtatEquipement::create(

            [

                'idequipement'=>$request->inventaire['idequipement'][$i],
                'date'=>$request->inventaire['date'][$i],
                'valeur'=>$request->inventaire['valeur'][$i],
                'commentaire'=>$request->inventaire['commentaire'][$i]

            ]

        ); } 

    }

        if($equipement){
            Toastr::success('inventaire configuré avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }




    public function update(Request $request, EtatEquipement $etatequipement)
    {
        $test = $etatequipement->update(

            [
                'date'=>$request->date,
                'valeur'=>$request->valeur,
                'commentaire'=>$request->commentaire
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
    public function destroy(EtatEquipement $etatequipement)
    {
        $test = $etatequipement->delete();

        if($test){
            Toastr::success('equipement supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }
}
