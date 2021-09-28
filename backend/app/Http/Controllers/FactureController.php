<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Facture;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\Locataire;
use App\Models\Quittance;
use Malico\MeSomb\Payment;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facture = Facture::all();

        return $facture;
    }

    public function indexLocataire()
    {
        $locataire = Locataire::where('idu', session('loggedUser')->idu)->first();
        $locations = Location::where('idlocataire', $locataire->getAttributes('idlocataire'))->get();
        $locationsArray = [];

        foreach ($locations as $location) {
            $locationsArray += $location->idlocation;
        }
        $factures = Facture::where('idlocation', $locationsArray)->get();

        return $factures;
    }

    public function indexBailleur()
    {
        $bailleur = Bailleur::where('idu', session('loggedUser')->idu)->first();
        $locations = Location::where('idbailleur', $bailleur->getAttributes('idbailleur'))->get();
        $locationsArray = [];

        foreach ($locations as $location) {
            $locationsArray += $location->idlocation;
        }
        $factures = Facture::where('idlocation', $locationsArray)->get();

        return $factures;
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
        $facture = Facture::create(

            [

                'idlocation' => $request->idlocation,
                'date' => $request->date,
                'datedebut' => $request->datedebut,
                'datefin' => $request->datefin,
                'datelimite' => $request->datelimite,
                'etat' => $request->etat

            ]

        );

        if ($facture) {
            Toastr::success('facture ajoutée avec succes', 'succes', ["iconClass" => "customer-g", "positionClass" => "toast-top-center"]);
            return back();
        } else {

            Toastr::error('L\'opération a échoué', 'erreur', ["iconClass" => "customer-r", "positionClass" => "toast-top-center"]);
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        return $facture;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        $test = $facture->update(

            [
                'etat' => 1

            ]

        );

        if ($test) {

            Quittance::create([
                'idfacture' => $request->id
            ]);

            Toastr::success('facture modifiée avec succes', 'succes', ["iconClass" => "customer-g", "positionClass" => "toast-top-center"]);
            return back();
        } else {

            Toastr::error('L\'opération a échoué', 'erreur', ["iconClass" => "customer-r", "positionClass" => "toast-top-center"]);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        $test = $facture->delete();


        if ($test) {
            Toastr::success('facture supprimée avec succes', 'succes', ["iconClass" => "customer-g", "positionClass" => "toast-top-center"]);
            return back();
        } else {

            Toastr::error('L\'opération a échoué', 'erreur', ["iconClass" => "customer-r", "positionClass" => "toast-top-center"]);
            return back();
        }
    }



    public function print(Facture $facture)
    {

        $location = Location::where('idlocation', $facture->idlocation)->first();

        $locataire = Locataire::where('idlocataire', $location->idlocataire)->first();

        $bien = Bien::where('idbien', $location->idbien)->first();

        $bailleur = Bailleur::where('idbailleur', $bien->idbailleur)->first();

        $ba = Utilisateur::where('idu', $bailleur->idu)->first();

        $loc = Utilisateur::where('idu', $locataire->idu)->first();

        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/facture', ['facture' => $facture, 'locataire' => $locataire, 'bailleur' => $bailleur, 'ba' => $ba, 'loc' => $loc, 'location' => $location]);

        return $pdf->stream('facture' . $facture->idLocation . now() . '.pdf');
    }


    public function printQuittance(Facture $facture)
    {

        $location = Location::where('idlocation', $facture->idlocation)->first();

        $locataire = Locataire::where('idlocataire', $location->idlocataire)->first();

        $bien = Bien::where('idbien', $location->idbien)->first();

        $bailleur = Bailleur::where('idbailleur', $bien->idbailleur)->first();

        $ba = Utilisateur::where('idu', $bailleur->idu)->first();

        $loc = Utilisateur::where('idu', $locataire->idu)->first();

        $quittance = Quittance::where('idfacture', $facture->idfacture)->first();

        $pdf = app('dompdf.wrapper');

        $pdf->loadView('pdf/quittance', ['facture' => $facture, 'quittance' => $quittance, 'locataire' => $locataire, 'bailleur' => $bailleur, 'ba' => $ba, 'loc' => $loc, 'location' => $location]);

        return $pdf->stream('quittance' . $quittance->idLocation . now() . '.pdf');
    }

    public function pay(Request $request)
    {

        $request2 = new Payment('+237' . $request->num, $request->montant);

        $payment = $request2->pay();

        if ($payment->success) {

            $facture = Facture::where('idfacture', $request->id)->first();

            $facture->update([

                'etat' => 1
            ]);

            Quittance::create([
                'idfacture' => $request->id
            ]);

            Toastr::success('Facture payée avec succes', 'succes', ["iconClass" => "customer-r", "positionClass" => "toast-top-center"]);

            return back();
        } else {

            Toastr::error('L\'opération a échoué', 'erreur', ["iconClass" => "customer-r", "positionClass" => "toast-top-center"]);
            return back();
        }
    }
}
