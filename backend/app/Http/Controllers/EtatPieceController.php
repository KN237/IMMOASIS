<?php

namespace App\Http\Controllers;

use App\Models\EtatPiece;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class EtatPieceController extends Controller
{
    public function store(Request $request)
    {

        for($i=0;$i<count($request->piece['idpiece']);$i++){
                
            $test=EtatPiece::where('idpiece',$request->piece['idpiece'][$i])->where('date',$request->piece['date'][$i])->first();

            if($test){

                $equipement = $test->update(

                    [
        
                        'idpiece'=>$request->piece['idpiece'][$i],
                        'date'=>$request->piece['date'][$i],
                        'valeur'=>$request->piece['valeur'][$i],
                        'commentaire'=>$request->piece['commentaire'][$i]
        
                    ]
        
                );

            }

       else{ $equipement = EtatPiece::create(

            [

                'idpiece'=>$request->piece['idpiece'][$i],
                'date'=>$request->piece['date'][$i],
                'valeur'=>$request->piece['valeur'][$i],
                'commentaire'=>$request->piece['commentaire'][$i]

            ]

        ); } 

    }

        if($equipement){
            Toastr::success('état de lieu configuré avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
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
    public function destroy(EtatPiece $etatpiece)
    {
        $test = $etatpiece->delete();

        if($test){
            Toastr::success('état de lieu supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }
}
