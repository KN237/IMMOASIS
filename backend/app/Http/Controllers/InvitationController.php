<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\Locataire;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class InvitationController extends Controller
{
    public function accepter($id)
    {
        $locataire=Locataire::where('idu',session('LoggedUser'))->first();

        $invitation=Invitation::where('idinvitation',$id)->first();

        $bien=Bien::where('idbailleur',$invitation->idbailleur)->first();

        $test= new Location();

        $test->idlocataire=$locataire->idlocataire;

        $test->idbien=$bien->idbien;

        $test->save();

        $test=Invitation::where('idinvitation',$id)->update([

            'etat'=> 2
        ]);

        if($test){
            Toastr::success('Invitation acceptée','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }


    public function rejeter($id)
    {
       
        $test=Invitation::where('idinvitation',$id)->update([

            'etat'=> 1
        ]);

        if($test){
            Toastr::success('Invitation rejetée avec succès','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué, veuillez réessayer','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    public function supprimer($id)
    {
       
        $test=Invitation::where('idinvitation',$id)->delete(); 

        if($test){
            Toastr::success('Invitation supprimée avec succès','succès',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué, veuillez réessayer','Erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }

        }
}
