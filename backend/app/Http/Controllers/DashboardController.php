<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\Locataire;
use App\Models\Invitation;
use App\Models\TypeBien;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class DashboardController extends Controller
{
    function dashboard(){
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        return view('admin.dashboard',compact('data'));
    }

    public function meslocataires()
    {
        $bailleur=Bailleur::where('idu',session('LoggedUser'))->first();

        $biens=Bien::where('idbailleur',$bailleur->idbailleur)->get();

        $idBienArray=[];

        foreach($biens as $bien){

            $idBienArray=+$bien->idbien;

        }

        $locations=Location::where('idbien', $idBienArray)->get();

        $idLocationArray=[];

        foreach($locations as $location){

            $idLocationArray=+$location->idlocataire;

        }

       $locataires=Locataire::where('idlocataire', $idLocationArray)->get();

        $users=Utilisateur::all();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.meslocataires',compact('locataires','users','data'));
    }

    public function showlocataire($id){

        $l=Locataire::where('idlocataire',$id)->first();
    
        $u=Utilisateur::where('idu',$l->idu)->first();
    
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.profilelocataire',compact('l','u','data'));
    }


    public function showbailleur($id){

        $l=Bailleur::where('idbailleur',$id)->first();
    
        $u=Utilisateur::where('idu',$l->idu)->first();
    
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.profilebailleur',compact('l','u','data'));
    }


    public function showmoncompte(){

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        if($data->role=="Bailleur"){

            $l=Bailleur::where('idu',$data->idu)->first();

            return view('admin.moncomptebailleur',compact('l','data'));

        }

        else{

            $l=Locataire::where('idu',$data->idu)->first();

            return view('admin.moncomptelocataire',compact('l','data'));
        }
        
    
     

        
    }





    public function locataires(){

        $locataires=Locataire::all();
    
        $users=Utilisateur::all();
    
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.locataires',compact('locataires','users','data'));
    }

    public function invitationsrecues(){

        $locataire=Locataire::where('idu', session('LoggedUser'))->first();

        $invitations=Invitation::where('idlocataire',$locataire->idlocataire)->get();

        $invitationsID=[];

        foreach($invitations as $i){

            if(!array_search($i->idbailleur,$invitationsID) ){

                array_push($invitationsID,$i->idbailleur);
    
                }
        } 

        $bailleurs=Bailleur::whereIn('idbailleur',$invitationsID)->get();


        $locatairesID=[];


        foreach($bailleurs as $i){

            if(!array_search($i->idu, $locatairesID) ){

                array_push($locatairesID,$i->idu);

            }

        }

        $utilisateurs=Utilisateur::whereIn('idu',$locatairesID)->get();
    
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.invitationsrecues',compact('locataire','utilisateurs','bailleurs','invitations','data'));
    }


    public function invitationsenvoyees(){

        $bailleur=Bailleur::where('idu', session('LoggedUser'))->first();

        $invitations=Invitation::where('idbailleur',$bailleur->idbailleur)->get();

        $invitationsID=[];

        foreach($invitations as $i){


            if(!array_search($i->idlocataire,$invitationsID) ){

                array_push($invitationsID,$i->idlocataire);
    
                }

        } 


        $locataires=Locataire::whereIn('idlocataire',$invitationsID)->get();

        $locatairesID=[];


        foreach($locataires as $i){

            if(!array_search($i->idu, $locatairesID) ){

                array_push($locatairesID,$i->idu);

            }
        }

      $utilisateurs=Utilisateur::whereIn('idu',$locatairesID)->get();
    
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.invitationsenvoyees',compact('utilisateurs','locataires','bailleur','invitations','data'));
    }

    function utilisateurs(){

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $locataires= Locataire::all();
        $bailleurs = Bailleur::all();
        $u=Utilisateur::all();
        return view('admin.utilisateurs',compact('data','locataires','bailleurs','u'));
    }


    function biens(){

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $bailleurs = Bailleur::where('idu', $data->idu)->first();
        $biens=Bien::where('idbailleur',$bailleurs->idbailleur)->get();
        $tb=TypeBien::all();
        return view('admin.biens',compact('data','tb','biens'));
    }


    function typebiens(){

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $tb=TypeBien::all();
        return view('admin.typebiens',compact('data','tb'));
    }

}
