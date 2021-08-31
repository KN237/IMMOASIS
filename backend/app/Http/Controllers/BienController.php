<?php

namespace App\Http\Controllers;

use App\Models\bien;
use App\Models\Bailleur;
use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBailleur()
    {
       

        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->first();

        $biens=Bien::where('idbailleur',$bailleur->idbailleur)->get();

        return $biens;
    }


    public function index()
    {
        $bien=Bien::all();

        return $bien;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->first();

        if($request->has('imagebien')){
            
            $file=$request->imagebien->getClientOriginalName();

            $request->imagebien->storeAs('biens',$file,'/public');

            $bien=Bien::create(
            
                [ 
            'nomBien'=>$request->nombien,
            'idTypeBien'=>$request->idtypebien,
            'idU'=>$bailleur->idu,
            'idBailleur'=>$bailleur->idbailleur,
            'numTitreFoncier'=>$request->numtitrefoncier,
            'numPermisConst'=>$request->numpermisconst,
            'descriptionBien'=>$request->descriptionbien,
            'imageBien'=>$file,
            'superficieBien'=>$request->superficiebien,
            'etatBien'=>$request->etatbien,
            'villeBien'=>$request->nombien,
            'paysBien'=>$request->paysbien,
            'quartierBien'=>$request->quartier
             
             ]
             
             );
     


        }

        else{

            $bien=Bien::create(
            
                [ 
            'nomBien'=>$request->nombien,
            'idTypeBien'=>$request->idtypebien,
            'idU'=>$bailleur->idu,
            'idBailleur'=>$bailleur->idbailleur,
            'numTitreFoncier'=>$request->numtitrefoncier,
            'numPermisConst'=>$request->numpermisconst,
            'descriptionBien'=>$request->descriptionbien,
            'imageBien'=>"internis.png",
            'superficieBien'=>$request->superficiebien,
            'etatBien'=>$request->etatbien,
            'villeBien'=>$request->nombien,
            'paysBien'=>$request->paysbien,
            'quartierBien'=>$request->quartier
             
             ]
             
             );

     
             if($bien){
     
                 return response()->json([
     
                     'succes'=>'bien ajouté avec succès'
     
                 ],200);
             }

        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function show(bien $bien)
    {
        return $bien;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function edit(bien $bien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bien $bien)
    {
        if($request->has('imagebien')){
            
            $file=$request->imagebien->getClientOriginalName();

            $request->imagebien->storeAs('biens',$file,'/public');

            $test=$bien->update(
            
                [ 
            'nomBien'=>$request->nombien,
            'idTypeBien'=>$request->idtypebien,
            'numTitreFoncier'=>$request->numtitrefoncier,
            'numPermisConst'=>$request->numpermisconst,
            'descriptionBien'=>$request->descriptionbien,
            'imageBien'=>$file,
            'superficieBien'=>$request->superficiebien,
            'etatBien'=>$request->etatbien,
            'villeBien'=>$request->nombien,
            'paysBien'=>$request->paysbien,
            'quartierBien'=>$request->quartier
             
             ]
             
             );
     


        }

        else{

            $test=$bien->update(
            
                [ 
            'nomBien'=>$request->nombien,
            'idTypeBien'=>$request->idtypebien,
            'numTitreFoncier'=>$request->numtitrefoncier,
            'numPermisConst'=>$request->numpermisconst,
            'descriptionBien'=>$request->descriptionbien,
            'imageBien'=>"internis.png",
            'superficieBien'=>$request->superficiebien,
            'etatBien'=>$request->etatbien,
            'villeBien'=>$request->nombien,
            'paysBien'=>$request->paysbien,
            'quartierBien'=>$request->quartier
             
             ]
             
             );
             
     
             if($test){
     
                 return response()->json([
     
                     'succes'=>'bien modifié avec succès'
     
                 ],200);
             }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function destroy(bien $bien)
    {
        $test=$bien->delete();

        if($test){
     
            return response()->json([

                'succes'=>'bien supprimé avec succès'

            ],200);
        }
    }

}
