<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piece = Piece::all();

        return $piece;
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

        $piece = Piece::create(

            [

                'nomPiece'=>$request->nompiece,
                'idBien'=>$request->idbien

            ]

        ); 

        if ($piece) {

            return response()->json([

                'succes' => 'Piece ajouté avec succès'

            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function show(Piece $piece)
    {
        return $piece;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function edit(Piece $piece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piece $piece)
    {
        $test = $piece->update(

            [

                'nomPiece'=>$request->nompiece,
                'idBien'=>$request->idbien

            ]

        );

        if ($test) {

            return response()->json([

                'succes' => 'Piece modifié avec succès'

            ], 200);
        }
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piece $piece)
    {
        $test = $piece->delete();

        if ($test) {

            return response()->json([

                'succes' => 'Piece supprimé avec succès'

            ], 200);
        }
    }
}
