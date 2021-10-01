<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Package;
use App\Models\Bailleur;
use App\Models\Validite;
use App\Models\Locataire;
use Malico\MeSomb\Payment;
use App\Models\Transaction;
use App\Models\Utilisateur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
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
       //Validate requests
       $request->validate([
        'nomcomplet'=>'required',
        'email'=>'required|email|unique:utilisateur',
        'mdp'=>'required|min:5|max:12',
        'mdpc'=>'in:'.$request->mdp,
        'compte'=>'required',
        'telephone'=>'required',
    ]);

     //Insert data into database
     $utlisateur = new Utilisateur;
     $utlisateur->nomcomplet = $request->nomcomplet;
     $utlisateur->email = $request->email;
     $utlisateur->telephone = $request->telephone;
     $utlisateur->mdp = Hash::make($request->mdp);
     $save = $utlisateur->save();

     if($request->compte=='bailleur'){

        $utlisateur->update([
            'role'=>'Bailleur'
        ]);

        $bailleur = new Bailleur();
        $bailleur->idu=$utlisateur->idu;
        $bailleur->save();
     }
     else{

        $utlisateur->update([
            'role'=>'Locataire'
        ]);
        $locataire = new Locataire();
        $locataire->idu=$utlisateur->idu;
        $locataire->save();

     }

     if($save){

        Toastr::success('Utilisateur créé avec succes','succes',["positionClass"=>"toast-top-center"]);
        return back();
     }else{
       Toastr::error('La création a échoué','erreur',["positionClass"=>"toast-top-center"]);
         return back();
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */

     
     

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $test=$utilisateur->update(
            
            [ 
 
         'nomcomplet'=>$request->nomcomplet,
         'email'=>$request->email,
         'telephone'=>$request->telephone,
 
         ]
         
         );
 
         if($test){
            Toastr::success('utilisateur modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La modification a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        $test=$utilisateur->delete();


        if($test){
            Toastr::success('utilisateur supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('La suppréssion a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    public function package(Utilisateur $utilisateur,$id)
    {
        $package=Package::where('idpackage',$id)->first();
        $montant=$package->montant;
        return view('paiement',compact('package','montant','utilisateur'));
 
    }



    public function payerpackage(Request $request)
    {
        $request2 = new Payment('+237' . $request->num, $request->montant);

        $payment = $request2->pay();

        if ($payment->success) {

            Validite::create([
                'idu'=>session('LoggedUser'),
                'idpackage'=>$request->idpackage,
                'datesous'=>now(),
                'dateexp'=>now()->addDays(30)
            ]);


            Transaction::create([

                'idu'=>session('LoggedUser'),
                'motif'=>'Souscription',
                'date'=>now(), 
                'montant'=>$request->montant
            ]);

            Toastr::success('Souscription éffectuée avec succes', 'succes', ["iconClass" => "customer-r", "positionClass" => "toast-top-center"]);

            return back();
        } else {

            Toastr::error('L\'opération a échoué', 'erreur', ["iconClass" => "customer-r", "positionClass" => "toast-top-center"]);
            return back();
        }

    }


}
