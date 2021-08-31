<?php

namespace App\Http\Controllers;

use App\Models\typeBien;
use Illuminate\Http\Request;

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
 
                'nomtypebien'=>$request->nomtypebien,
                
 
         ]
         
         );
 
         if($tb){
 
             return response()->json([
 
                 'succes'=>'Type de bien ajouté avec succès'
 
             ],200);
         }
    }


    public function show(typeBien $typeBien)
    {
        return $typeBien;
    }

  
    public function destroy(typeBien $typeBien)
    {
        $test=$typeBien->delete();
 
        if($test){

            return response()->json([

                'succes'=>'Type de bien supprimé avec succès'

            ],200);
        }
    }
}
