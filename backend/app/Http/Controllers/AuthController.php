<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\Bailleur;
use App\Models\Locataire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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
            'nomu'=>'required|unique:utilisateur',
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
            return back()->with('success','Utilisateur créé avec succès');
         }else{
             return back()->with('fail','Une erreur s\'est produite, veuillez réessayer');
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
            return back()->with('fail','Adresse email inconnue');
        }else{
            //check password
            if(Hash::check($request->mdpu, $userInfo->mdpu)){
                $request->session()->put('LoggedUser', $userInfo->idu);
                return redirect('admin/dashboard');

            }else{
                return back()->with('fail','Mot de passe incorrect');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Utilisateur::where('idu','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

}
