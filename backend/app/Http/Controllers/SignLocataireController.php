<?php

namespace App\Http\Controllers;

use App\Models\Locataire;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SignLocataireController extends Controller
{
    public function store(Request $request,$id)
    {

        $folderPath = storage_path('app/public/signatures/signature');

        $image_parts = explode(";base64,", $request->signed);

        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);

        $file = $folderPath . uniqid() . '.' . $image_type;

        $test=explode('app/public/signatures/signature',$file);

        $fichier='signature'.$test[1];

        Locataire::where('idlocataire',$id)->update([
            'signature'=>$fichier
        ]);

        $test2 = file_put_contents($file, $image_base64);

        if ($test2) {

            Toastr::success('signature ajoutée avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }

        else{

            Toastr::error('l\'opération a échoué','erreur',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();

        }
    }
}
