<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Artisan;
use Illuminate\Http\Request;
use App\Models\Administrateur;
use Brian2694\Toastr\Facades\Toastr;

class ArtisanController extends Controller
{
   
    public function store(Request $request)
    {
        $artisan=Artisan::create(
            
            [ 
                'nomcomplet'=>$request->nomcomplet,
                'profession'=>$request->profession,
                'telephone'=>$request->telephone,
                'ville'=>$request->ville,
                'quartier'=>$request->quartier
 
         ]
         
         );
 
         if($artisan){
            Toastr::success('artisan ajouté avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

 

    public function update(Request $request, Artisan $artisan)
    {
        $test=$artisan->update(
            
            [ 

                'nomcomplet'=>$request->nomcomplet,
                'profession'=>$request->profession,
                'telephone'=>$request->telephone,
                'ville'=>$request->ville,
                'quartier'=>$request->quartier
 
         ]
         
         );
 
         if($test){
            Toastr::success('artisan supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


    public function note(Request $request, $id)
    {
      $note=Note::where('idartisan',$id)->where('idu',session('LoggedUser'))->first();

      if($note){

        $test=$note->update(
            
            [ 

                'valeur'=>$request->valeur
 
         ]
         
         );

      }


      else{

        $test=Note::create(
            
            [ 

                'idartisan'=>$id,
                'idu'=>session('LoggedUser'),
                'valeur'=>$request->valeur
 
         ]
         
         );

      }

 
 
         if($test){
            Toastr::success('note ajoutée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }



    public function destroy(Artisan $artisan)
    {
        $test=$artisan->delete();
 
        if($test){
            Toastr::success('artisan supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }
}
