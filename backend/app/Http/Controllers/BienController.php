<?php

namespace App\Http\Controllers;

use App\Models\bien;
use App\Models\Bailleur;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class BienController extends Controller
{
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bailleur=Bailleur::where('idu',session('LoggedUser'))->first();

        if($request->has('image')){
            
            $file=$request->image->getClientOriginalName();

            $request->image->storeAs('biens',$file);

            $bien=Bien::create(
            
                [ 
            'nom'=>$request->nom,
            'idtb'=>$request->idtb,
            'idbailleur'=>$bailleur->idbailleur,
            'numtitrefoncier'=>$request->numtitrefoncier,
            'numpermisconst'=>$request->numpermisconst,
            'description'=>$request->description,
            'image'=>$file,
            'superficie'=>$request->superficie,
            'ville'=>$request->ville,
            'quartier'=>$request->quartier
             
             ]
             
             );
     
        }

        else{

            $bien=Bien::create(
            
                [ 
            'nom'=>$request->nom,
            'idtb'=>$request->idtb,
            'idbailleur'=>$bailleur->idbailleur,
            'numtitrefoncier'=>$request->numtitrefoncier,
            'numpermisconst'=>$request->numpermisconst,
            'description'=>$request->description,
            'image'=>"internis.png",
            'superficie'=>$request->superficie,
            'ville'=>$request->ville,
            'quartier'=>$request->quartier
             
             ]
             
             );

     
             

        }

        if($bien){
            Toastr::success('bien ajouté avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }

       
    }


    public function update(Request $request, bien $bien)
    {
        if($request->has('imagebien')){
            
            $file=$request->imagebien->getClientOriginalName();

            $request->imagebien->storeAs('biens',$file,'/public');

            $test=$bien->update(
            
                [ 
            'nom'=>$request->nom,
            'idtb'=>$request->idtb,
            'numtitrefoncier'=>$request->numtitrefoncier,
            'numpermisconst'=>$request->numpermisconst,
            'description'=>$request->description,
            'image'=>$file,
            'superficie'=>$request->superficie,
            'ville'=>$request->ville,
            'quartier'=>$request->quartier
             
             ]
             
             );
     


        }

        else{

            $test=$bien->update(
            
                [ 
            'nom'=>$request->nom,
            'idtb'=>$request->idtb,
            'numtitrefoncier'=>$request->numtitrefoncier,
            'numpermisconst'=>$request->numpermisconst,
            'description'=>$request->description,
            'image'=>"internis.png",
            'superficie'=>$request->superficie,
            'ville'=>$request->ville,
            'quartier'=>$request->quartier
             
             ]
             
             );
             
     
             if($test){
                Toastr::success('bien modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
                return back();
            }else{
               
                    Toastr::error('L\'opération a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                    return back();
                    
                }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function destroy(bien $bien)
    {
        $test=$bien->delete();

        if($test){
            Toastr::success('bien supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }

    }

}
