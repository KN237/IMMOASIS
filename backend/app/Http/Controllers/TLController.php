<?php

namespace App\Http\Controllers;

use App\Models\typeLocation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class TLController extends Controller
{
   
    
    public function store(Request $request)
    {
        $tb=typeLocation::create(
            
            [ 
 
                'nom'=>$request->nom,
                
 
         ]
         
         );
 
         if($tb){
            Toastr::success('type de location ajouté avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\' ajout a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


  
    public function destroy($id)
    {
        $test=typeLocation::where('idtl',$id)->delete();
 
            if($test){
                Toastr::success('type de location supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
                return back();
            }else{
               
                    Toastr::error('La suppression a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                    return back();
                    
                }
        
    }
}
