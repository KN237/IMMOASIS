<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Bailleur;
use App\Models\Article;
use Illuminate\Http\Request;

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

    public function indexBailleur()
    {
        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->get();
        $bien=Bien::where('idbailleur',$bailleur->idbailleur)->get();
        $article=article::where('idbien',$bien->idbien)->get();

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
        $bailleur=Bailleur::where('idu',session('loggedUser')->idu)->get();

        $article=article::create(
            
            [ 
                'idBailleur'=>$bailleur->idbailleur,
                'titreArticle'=>$request->titrearticle,
                'idcontrat'=>$request->idcontrat,
                'descriptionArticle'=>$request->descriptionarticle,
         ]
         
         );
 
         if($article){
 
             return response()->json([
 
                 'succes'=>'article ajouté avec succès'
 
             ],200);
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
                'titreArticle'=>$request->titrearticle,
                'idcontrat'=>$request->idcontrat,
                'descriptionArticle'=>$request->descriptionarticle,
         
         ]
         
         );
 
         if($test){
 
             return response()->json([
 
                 'succes'=>'article modifié avec succès'
 
             ],200);
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
 
             return response()->json([
 
                 'succes'=>'article supprimé avec succès'
 
             ],200);
         }
    }


}
