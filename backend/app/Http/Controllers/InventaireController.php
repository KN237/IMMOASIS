<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Piece;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\Locataire;
use App\Models\Equipement;
use App\Models\Inventaire;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Models\EtatEquipement;
use Brian2694\Toastr\Facades\Toastr;

class InventaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaire = Inventaire::all();

        return $inventaire;
    }

    public function indexBailleur()
    {
        $bailleur = Bailleur::where('idu', session('loggedUser')->idu)->get();
        $bien = Bien::where('idbailleur', $bailleur->idbailleur)->get();
        $inventaire = Inventaire::where('idbien', $bien->idbien)->get();

        return $inventaire;
    }

    public function indexLocataire()
    {
        $locataire = Locataire::where('idu', session('loggedUser')->idu)->get();
        $location = Location::where('idLocataire', $locataire->idLocataire)->get();
        $inventaire = Inventaire::where('idbien', $location->idbien)->get();

        return $inventaire;
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
        $inventaire = Inventaire::create(

            [
                'idbien' => $request->idbien,
                'description' => $request->description,
                'date' => $request->date,

            ]

        );
        if($inventaire){
            Toastr::success('inventaire ajouté avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaire  $inventaire
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaire $inventaire)
    {
        return $inventaire;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaire $inventaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaire $inventaire)
    {
        return $inventaire;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaire  $inventaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaire $inventaire)
    {
        $test = $inventaire->update(

            [
                'idbien' => $request->idbien,
                'description' => $request->description,
                'date' => $request->date,

            ]

        );

        if($test){
            Toastr::success('inventaire modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    public function signBailleur($id)
    {
        $test=Inventaire::where('idinventaire',$id)->update(
            
            [ 
                'signbailleur'=>1,
         
         ]
         
         );
 
         if($test){
            Toastr::success('inventaire signé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


    public function signLocataire($id)
    {
        $test=Inventaire::where('idinventaire',$id)->update(
            
            [ 
                'signlocataire'=>1,
         
         ]
         
         );
 
         if($test){
            Toastr::success('inventaire signé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaire $inventaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaire $inventaire)
    {
        $test = $inventaire->delete();

        if($test){
            Toastr::success('inventaire supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    public function print(Inventaire $inventaire)
    {
        
        $users=Utilisateur::all();

        $bien=Bien::where('idbien',$inventaire->idbien)->first();

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


        $equipements=Equipement::whereIn('idpiece',$piecesID)->get();

        $equipementsID=[];

        foreach($equipements as $b){

            if(!array_search($b->idequipement, $equipementsID) ){

                array_push($equipementsID,$b->idequipement);

            }
        }

        $etatsequipements=EtatEquipement::where('date',$inventaire->date)->whereIn('idequipement',$equipementsID)->get();

        if($etatsequipements){

        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/inventaire', ['inventaire' => $inventaire,'bailleur'=>$bailleur,'pieces'=>$pieces,'equipements'=>$equipements,'bien'=>$bien,'users'=>$users,'locataire'=>$locataire,'etatsequipements'=>$etatsequipements]);

        return $pdf->stream('inventaire' . $inventaire->idbien . now() . 'pdf');

        }else{

            Toastr::warning('Veuillez tout d\'abord configurer l\'inventaire','attention',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
            return back();

        }
        
    }
}
