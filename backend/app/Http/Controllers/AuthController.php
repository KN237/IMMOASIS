<?php

namespace App\Http\Controllers;

use App\Models\Bailleur;
use App\Models\Locataire;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        
        //Validate requests
        $request->validate([
            'nomcompletu'=>'required',
            'emailu'=>'required|email|unique:utilisateur',
            'mdpu'=>'required|min:5|max:12',
            'mdpuc'=>'in:'.$request->mdpu,
            'compte'=>'required|min:5|max:12',
            'telephoneu'=>'required',
        ]);

         //Insert data into database
         $utlisateur = new Utilisateur;
         $utlisateur->nomu = $request->nomu;
         $utlisateur->nomcompletu = $request->nomcompletu;
         $utlisateur->emailu = $request->emailu;
         $utlisateur->telephoneu = $request->telephoneu;
         $utlisateur->mdpu = Hash::make($request->mdpu);
         $save = $utlisateur->save();

         if($request->compte=='bailleur'){

            $bailleur = new Bailleur();
            $bailleur->idu=$utlisateur->idu;
            $bailleur->save();
         }
         else{

            $locataire = new Locataire();
            $locataire->idu=$utlisateur->idu;
            $locataire->save();

         }

         if($save){

            Toastr::success('Utilisateur créé avec succès','Succès',["iconClass"=>'customer-g']);
            return back();
         }else{
            Toastr::error('Veuillez réessayer','Erreur',["iconClass"=>'customer-r']);
             return back();
         }
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
             'emailu'=>'required|email',
             'mdpu'=>'required|min:5|max:12'
        ]);

        $userInfo = Utilisateur::where('emailu','=', $request->emailu)->first();

        if(!$userInfo){
            Toastr::error('Adresse email inconnue','Erreur',["iconClass"=>"customer-r"]);
            return back();
        }else{
            //check password
            if(Hash::check($request->mdpu, $userInfo->mdpu)){
                $request->session()->put('LoggedUser', $userInfo->idu);

                return view('welcome');

            }else{
                Toastr::error('Mot de passe incorrect','Erreur',["iconClass"=>"customer-r"]);
                return back();
                
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Utilisateur::where('idu','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

}
