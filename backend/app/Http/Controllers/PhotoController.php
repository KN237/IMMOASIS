<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class PhotoController extends Controller
{
  
    public function store(Request $request)
    {

        if($request->has('nom')){
            
            $file=uniqid().".".$request->nom->getClientOriginalName();

            $request->nom->storeAs('photosbiens',$file,'public');


        $tb=Photo::create(
            
            [ 
 
                'nom'=>$file,
                'idbien'=>$request->idbien,
                
 
         ]
         
         );

         if($tb){
            Toastr::success('photo ajoutée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\' ajout a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }

        }

        else{

            Toastr::error('L\' ajout a échoué, veuillez choisir une image','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();

            
        }
 
         
    }


  
    public function destroy(Photo $photo)
    {
        $test=$photo->delete();
 
            if($test){
                Toastr::success('photo supprimée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
                return back();
            }else{
               
                    Toastr::error('La suppression a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                    return back();
                    
                }
        
    }
}

