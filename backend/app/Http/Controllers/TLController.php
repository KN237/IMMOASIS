<?php

namespace App\Http\Controllers;

use App\Models\typeLocation;
use Illuminate\Http\Request;

class TLController extends Controller
{
   
    
    public function index()
    {
        $tl=typeLocation::all();

        return $tl;
    }


    
    public function store(Request $request)
    {
        $tl=typeLocation::create(
            
            [ 
 
                'nomtypelocation'=>$request->nomtypelocation,
                
 
         ]
         
         );
 
         if($tl){
 
             return response()->json([
 
                 'succes'=>'Type de location ajouté avec succès'
 
             ],200);
         }
    }

    
    public function show(typeLocation $typeLocation)
    {
        return $typeLocation;
    }

  
    
 
    
    public function destroy(typeLocation $typeLocation)
    {
        $test=$typeLocation->delete();
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'Type de location supprimé avec succès'
 
             ],200);
         }
    }
}
