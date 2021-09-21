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

            Toastr::success('Utilisateur créé avec succes','succes');
            return back();
         }else{
            Toastr::error('Veuillez réessayer','erreur');
             return back();
         }
    }

    function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'mdp'=>'required|min:5|max:12'
        ]);

        $userInfo = Utilisateur::where('email','=', $request->email)->first();

        if(!$userInfo){
            Toastr::error('Adresse email inconnue','erreur');
            return back();
        }else{
            //check password
            if(Hash::check($request->mdp, $userInfo->mdp)){
                $request->session()->put('LoggedUser', $userInfo->idu);

                return view('welcome');

            }else{
                Toastr::error('Mot de passe incorrect','erreur',["iconClass"=>"customer-r"]);
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
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        return view('admin.dashboard',compact('data'));
    }

}
