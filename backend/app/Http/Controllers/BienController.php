<?php

namespace App\Http\Controllers;

use App\Models\bien;
use App\Models\Package;
use App\Models\Bailleur;
use App\Models\Validite;
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

        $permissions=Validite::where('idu',$bailleur->idu)->whereDate('dateexp','>=',date("Y-m-d"))->get();

        if(count($permissions)==0){

            Toastr::error('Désolé, votre plan n\'est plus à jour, veuillez l\'upgrader','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
            return back();
        }

        else{

            $permissionsID = [];

            foreach ($permissions as $b) {

                    array_push($permissionsID, $b->idpackage);

            }


        $packages=Package::whereIn('idpackage',$permissionsID)->get();


        $nombrebiens = 0;

            foreach ($packages as $b) {

                $nombrebiens=$nombrebiens + $b->nombrebienmax;

            }

        $permission=Validite::where('idu',$bailleur->idu)->whereDate('dateexp','>=',date("Y-m-d"))->orderBy('datesous','asc')->first();

        $biens=Bien::where('idbailleur',$bailleur->idbailleur)->where('date','<=',$permission->dateexp)->where('date','>=',$permission->datesous)->get();

        if(count($biens)<=$nombrebiens){

        if($request->has('image')){
            
            $file=uniqid().".".$request->image->getClientOriginalName();

            $request->image->storeAs('biens',$file,'public');

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
            'quartier'=>$request->quartier,
            'date'=>now(),
             
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
            'quartier'=>$request->quartier,
            'date'=>now()
             
             ]
             
             );

     
             

        }

        if($bien){
            Toastr::success('bien ajouté avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }

        }

        else{

            Toastr::error('Désolé, votre plan ne vous permet plus d\'ajouter de bien, veuillez l\'upgrader','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();

        }

    }

       
    }


    public function update(Request $request, bien $bien)
    {
        if($request->has('image')){
            
            $file=uniqid().".".$request->image->getClientOriginalName();

            $request->image->storeAs('biens',$file,'public');


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
             if($test){
                Toastr::success('bien modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
                return back();
            }else{
               
                    Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                    return back();
                    
                }


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
               
                    Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
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
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }

    }

}
