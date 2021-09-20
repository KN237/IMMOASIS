<?php

namespace App\Http\Controllers;

use App\Models\typeBien;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class TBController extends Controller
{
   
    public function index()
    {
        $tb=typeBien::all();

        return $tb;
    }


    public function store(Request $request)
    {
        $tb=typeBien::create(
            
            [ 
 
                'nom'=>$request->nom,
                
 
         ]
         
         );
 
         if($tb){
            Toastr::success('type de bien ajouté avec succès','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\' ajout a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


  
    public function destroy($id)
    {
        $test=typeBien::where('idtb',$id)->delete();
 
            if($test){
                Toastr::success('type de bien supprimé avec succès','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
                return back();
            }else{
               
                    Toastr::error('La suppression a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                    return back();
                    
                }
        
    }
}
