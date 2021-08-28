<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package=Package::all();

        return $package;
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
        $package=Package::create(
            
            [ 
 
                'nomPackage'=>$request->nompackage,
                'nombreBienMax'=>$request->nombrebienmax,
                'montantPackage'=>$request->montantpackage,
 
         ]
         
         );
 
         if($package){
 
             return response()->json([
 
                 'succes'=>'package ajouté avec succès'
 
             ],200);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return $package;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $test=$package->update(
            
            [ 
 
                'nomPackage'=>$request->nompackage,
                'nombreBienMax'=>$request->nombrebienmax,
                'montantPackage'=>$request->montantpackage,
 
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'package modifié avec succès'
 
             ],200);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $test=$package->delete();
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'package supprimé avec succès'
 
             ],200);
         }
    }
}
