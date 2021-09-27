<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Piece;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\EtatLieux;
use App\Models\EtatPiece;
use App\Models\Locataire;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class EtatLieuxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etatLieux=EtatLieux::all();

        return $etatLieux;
    }

    public function indexBailleur()
    {
        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->get();
        $bien=Bien::where('idbailleur',$bailleur->idbailleur)->get();
        $etatLieux=EtatLieux::where('idbien',$bien->idbien)->get();

        return $etatLieux;
    }

    public function indexLocataire()
    {
        $locataire=Locataire::where('idu',session('loggedUser')->idu)->get();
        $location=Location::where('idLocataire',$locataire->idlocataire)->get();
        $etatLieux=EtatLieux::where('idbien',$location->idbien)->get();

        return $etatLieux;
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
        $etatLieux=EtatLieux::create(
            
            [ 
                'idbien'=>$request->idbien,
                'description'=>$request->description,
                'datedebut'=>$request->date,
                'datefin'=>$request->date,
                
         
         ]
         
         );
 
         if($etatLieux){
            Toastr::success('état des lieux ajouté avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
 
    }



    public function update(Request $request,$id)
    {
        $test=EtatLieux::where('idetatlieu',$id)->update(
            
            [ 
                'description'=>$request->description,
                'datedebut'=>$request->date,
                'datefin'=>$request->date,
                
         
         ]
         
         );
 
         if($test){
            Toastr::success('état des lieux modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
 
    }


 


    public function signBailleur($id)
    {
        $test=EtatLieux::where('idetatlieu',$id)->update(
            
            [ 
                'signbailleur'=>1,
         
         ]
         
         );
 
         if($test){
            Toastr::success('état des lieux signé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


    public function signLocataire($id)
    {
        $test=EtatLieux::where('idetatlieu',$id)->update(
            
            [ 
                'signlocataire'=>1,
         
         ]
         
         );
 
         if($test){
            Toastr::success('état des lieux signé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EtatLieux  $etatLieux
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $test=EtatLieux::where('idetatlieu',$id)->delete();
 
        if($test){
            Toastr::success('état des lieux supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    public function print(EtatLieux $etatlieux)
    {
        
        $users=Utilisateur::all();

        $bien=Bien::where('idbien',$etatlieux->idbien)->first();

        $bailleur=Bailleur::where('idbailleur',$bien->idbailleur)->first();

        $location=Location::where('idbien',$bien->idbien)->first();

        $locataire=Locataire::where('idlocataire',$location->idlocataire)->first();
         
        $pieces=Piece::where('idbien',$bien->idbien)->get();

        $piecesID=[];

        foreach($pieces as $b){

            if(!array_search($b->idpiece, $piecesID) ){

                array_push($piecesID,$b->idpiece);

            }
        }

        $etatspieces=EtatPiece::where('date',$etatlieux->datedebut)->whereIn('idpiece',$piecesID)->get();

        if($etatspieces){

        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/etatlieux', ['etatlieux'=>$etatlieux,'bailleur'=>$bailleur,'pieces'=>$pieces,'bien'=>$bien,'users'=>$users,'locataire'=>$locataire,'etatspieces'=>$etatspieces]);

        return $pdf->stream('EtatLieux'.$etatlieux->idBien.now().'pdf');

        }else{

            Toastr::warning('Veuillez tout d\'abord configurer l\'état de lieu','attention',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
            return back();

        }

    }

}
