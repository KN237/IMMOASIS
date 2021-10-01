<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\Locataire;
use App\Models\Invitation;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class LocataireController extends Controller
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
        
        $locataire=Locataire::create(
            
            [ 
                'numCniLoc'=>$request->numcniloc,
                'idu'=>session('loggedUser')->idU,
                'telephoneSecLoc'=>$request->telephonesecloc,
                'villeLoc'=>$request->villeloc,
                'quartierLoc'=>$request->quartierloc,
                'paysLoc'=>$request->paysloc,
                'dateNaissLoc'=>$request->datenaissloc,
                'sexeLoc'=>$request->sexeloc,
                'lieuNaissLoc'=>$request->lieunaissloc,
                'nomCompletEmployeurLoc'=>$request->nomcompletemployeurloc,
                'telEmployeurLoc'=>$request->telemployeurloc,
                'signatureLoc'=>'',
                'professionLoc'=>$request->professionloc,
                'revenuMensuelLoc'=>$request->revenumensuelloc,
         
         ]
         
         );

         if($locataire){
            Toastr::success('Locatair créé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La création a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locataire $locataire)
    {
        $test=$locataire->update(
            
            [ 
                'numCni'=>$request->numcni,
                'ville'=>$request->ville,
                'quartier'=>$request->quartier,
                'nomemployeur'=>$request->nomcompletemployeur,
                'telemployeur'=>$request->telemployeur,
                'profession'=>$request->profession 
         ]
         
         );

         if($test){
            Toastr::success('locataire modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La modification a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locataire $locataire)
    {
        $test=Location::where('idlocataire',$locataire->idlocataire)->delete();

        if($test){
            Toastr::success('locataire supprimé de votre liste avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La suppréssion a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


    public function inviter($id){

    $bailleur=Bailleur::where('idu',session('LoggedUser'))->first();
    $biens=Bien::where('idbailleur',$bailleur->idbailleur)->get();
    $biensID=[];

    foreach($biens as $i){

        if(!array_search($i->idbien,$biensID) ){

            array_push($biensID,$i->idbien);

            }
    }

    $location=Location::where('idlocataire',$id)->WhereIn('idbien',$biensID)->get();

    $invite=Invitation::where('idlocataire',$id)->where('idbailleur',$bailleur->idbailleur)->get();

    if(count($location)!=0 or count($invite)!=0){

        Toastr::warning('Ce locataire est déja enregistré chez vous, ou vous lui avez déja envoyé une invitation','attention',["positionClass"=>"toast-top-center"]);
        return back();
    }

    else{

    $invitation=new Invitation();
    $invitation->idlocataire= $id;
    $invitation->etat= 0;
    $invitation->date= now();
    

   
    $invitation->idbailleur= $bailleur->idbailleur;
    $test=$invitation->save();

    if($test){
        Toastr::success('Invitation envoyée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
        return back();
    }else{
       
            Toastr::error('L\'invitation a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
            return back();
            
        }
    }

}



}
