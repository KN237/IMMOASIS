<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Article;
use App\Models\Bailleur;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::all();

        return $article;
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
        $bailleur=Bailleur::where('idu',session('LoggedUser'))->first();

        $article=article::create(
            
            [ 
                'idbailleur'=>$bailleur->idbailleur,
                'titre'=>$request->titre,
                'idcontrat'=>$request->idcontrat,
                'description'=>$request->description,
         ]
         
         );
 
         if($article){
            Toastr::success('article ajouté avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        return $article;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        return $article;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        $test=$article->update(
            
            [ 
                'titre'=>$request->titre,
                'idcontrat'=>$request->idcontrat,
                'description'=>$request->description,
         
         ]
         
         );
 
         if($test){
            Toastr::success('article modifié avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
            return back();
        }else{
           
                Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                return back();
                
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        $test=$article->delete();
 
            if($test){
                Toastr::success('article supprimé avec succes','succes',["iconClass"=>"customer-g","positionClass"=>"toast-top-center"]);
                return back();
            }else{
               
                    Toastr::error('L\'opération a échoué','erreur',["iconClass"=>"customer-r","positionClass"=>"toast-top-center"]);
                    return back();
                    
                }
    }


}
