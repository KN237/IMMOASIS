<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Note;
use App\Models\Photo;
use App\Models\Piece;
use App\Models\Article;
use App\Models\Artisan;
use App\Models\Contrat;
use App\Models\Facture;
use App\Models\Bailleur;
use App\Models\Location;
use App\Models\TypeBien;
use App\Charts\UserChart;
use App\Models\EtatLieux;
use App\Models\Locataire;
use App\Models\Equipement;
use App\Models\Inventaire;
use App\Models\Invitation;
use App\Models\Renovation;
use App\Models\Transaction;
use App\Models\Utilisateur;
use App\Models\TypeLocation;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Package as ModelsPackage;
use Facade\Ignition\Support\Packagist\Package;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
    function dashboard()
    {
        
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        if($data->role=="Bailleur"){

        $bailleur = Bailleur::where('idu', session('LoggedUser'))->first();

        $biens = Bien::where('idbailleur', $bailleur->idbailleur)->get();

        if(count($biens)==0){
            
            $biens=null;

            return view('admin.dashboard', compact('data','biens'));
        }

        else{



        $transactions = Transaction::where('recepteur', $bailleur->idbailleur)->get();

        $entrees = Transaction::where('recepteur', $bailleur->idbailleur)->where('motif', "Location")->get();

        $retraits = Transaction::where('recepteur', $bailleur->idbailleur)->where('motif', "Retrait")->get();

        $solde = 0;

        foreach ($transactions as $t) {

            if ($t->motif == "Location") {
                $solde = $solde + $t->montant;
            }
            if ($t->motif == "Retrait") {
                $solde = $solde - $t->montant;
            }
        }

        $idBienArray = [];

        foreach ($biens as $bien) {

            if (!array_search($bien->idbien, $idBienArray)) {

                array_push($idBienArray, $bien->idbien);
            }
        }

        $locations = Location::whereIn('idbien', $idBienArray)->get();

        $idLocationArray = [];

        foreach ($locations as $location) {

            if (!array_search($location->idlocataire, $idLocationArray)) {

                array_push($idLocationArray, $location->idlocataire);
            }
        }

        $locataires = Locataire::whereIn('idlocataire', $idLocationArray)->get();


        $usersChart = new UserChart;

        $transactionsDate = [];

        foreach ($entrees as $t) {
            array_push($transactionsDate, $t->date);
        }

        $usersChart->labels($transactionsDate);


        $transactionsMontant = [];

        foreach ($entrees as $t) {


            array_push($transactionsMontant, $t->montant);
        }

        $usersChart->dataset('Entrée', 'line', $transactionsMontant)->color("red")
            ->backgroundcolor("transparent");


        $usersChart2 = new UserChart;

        $transactionsDate = [];

        foreach ($retraits as $t) {
            array_push($transactionsDate, $t->date);
        }

        $usersChart2->labels($transactionsDate);


        $transactionsMontant = [];

        foreach ($retraits as $t) {


            array_push($transactionsMontant, $t->montant);
        }

        $usersChart2->dataset('Retrait', 'bar', $transactionsMontant)->color("black")
            ->backgroundcolor("grey");



        return view('admin.dashboard', compact('data', 'biens', 'solde', 'locataires', 'usersChart', 'usersChart2'));}

    }

    if($data->role=="Locataire"){

        $locataire = Locataire::where('idu', $data->idu)->first();

        $renovations=Renovation::where('idu',$data->idu)->get();

        $locations = Location::where('idlocataire', $locataire->idlocataire)->get();

        $locationsID = [];

        foreach ($locations as $b) {

            if (!array_search($b->idlocation, $locationsID)) {

                array_push($locationsID, $b->idlocation);
            }
        }


        $factures = Facture::whereIn('idlocation', $locationsID)->where('etat',0)->get();


        return view('admin.dashboard', compact('data','locations','factures','renovations'));

    }

    else{
        $biens=Bien::all();
        $users=Utilisateur::all();
        $transactions=Transaction::all();
        return view('admin.dashboard', compact('data','biens','users','transactions'));
    }


    }

    public function meslocataires()
    {
        $bailleur = Bailleur::where('idu', session('LoggedUser'))->first();

        $biens = Bien::where('idbailleur', $bailleur->idbailleur)->get();

        $idBienArray = [];

        foreach ($biens as $bien) {

            if (!array_search($bien->idbien, $idBienArray)) {

                array_push($idBienArray, $bien->idbien);
            }
        }

        $locations = Location::whereIn('idbien', $idBienArray)->get();

        $idLocationArray = [];

        foreach ($locations as $location) {

            if (!array_search($location->idlocataire, $idLocationArray)) {

                array_push($idLocationArray, $location->idlocataire);
            }
        }

        $locataires = Locataire::whereIn('idlocataire', $idLocationArray)->paginate(8);

        $users = Utilisateur::all();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.meslocataires', compact('locataires', 'users', 'data'));
    }

    public function showlocataire($id)
    {

        $l = Locataire::where('idlocataire', $id)->first();

        $u = Utilisateur::where('idu', $l->idu)->first();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.profilelocataire', compact('l', 'u', 'data'));
    }


    public function showbailleur($id)
    {

        $l = Bailleur::where('idbailleur', $id)->first();

        $u = Utilisateur::where('idu', $l->idu)->first();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.profilebailleur', compact('l', 'u', 'data'));
    }


    public function showmoncompte()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        if ($data->role == "Bailleur") {

            $l = Bailleur::where('idu', $data->idu)->first();

            return view('admin.moncomptebailleur', compact('l', 'data'));
        } else {

            $l = Locataire::where('idu', $data->idu)->first();

            return view('admin.moncomptelocataire', compact('l', 'data'));
        }
    }





    public function locataires()
    {

        $locataires = Locataire::paginate(8);

        $users = Utilisateur::all();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.locataires', compact('locataires', 'users', 'data'));
    }


    public function rechercherlocataires(Request $request)
    {


        $users = Utilisateur::where('nomcomplet', 'like', '%' . $request->nom . '%')->get();

        $idUserArray = [];

        foreach ($users as $u) {

            if (!array_search($u->idu, $idUserArray)) {

                array_push($idUserArray, $u->idu);
            }
        }

        $locataires = Locataire::whereIn('idu', $idUserArray)->get();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.locataires', compact('locataires', 'users', 'data'));
    }



    public function recherchermeslocataires(Request $request)
    {

        $bailleur = Bailleur::where('idu', session('LoggedUser'))->first();

        $biens = Bien::where('idbailleur', $bailleur->idbailleur)->get();

        $idBienArray = [];

        foreach ($biens as $bien) {

            if (!array_search($bien->idbien, $idBienArray)) {

                array_push($idBienArray, $bien->idbien);
            }
        }


        $locations = Location::where('idbien', $idBienArray)->get();

        $idLocationArray = [];

        foreach ($locations as $location) {

            if (!array_search($location->idlocataire, $idLocationArray)) {

                array_push($idLocationArray, $location->idlocataire);
            }
        }

        $users = Utilisateur::where('nomcomplet', 'like', '%' . $request->nom . '%')->get();


        $idUserArray = [];

        foreach ($users as $u) {

            if (!array_search($u->idu, $idUserArray)) {

                array_push($idUserArray, $u->idu);
            }
        }

        $locataires = Locataire::where('idlocataire', $idLocationArray)->where('idu', $idUserArray)->get();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.meslocataires', compact('locataires', 'users', 'data'));
    }




    public function invitationsrecues()
    {

        $locataire = Locataire::where('idu', session('LoggedUser'))->first();

        $invitations = Invitation::where('idlocataire', $locataire->idlocataire)->get();

        $invitationsID = [];

        foreach ($invitations as $i) {

            if (!array_search($i->idbailleur, $invitationsID)) {

                array_push($invitationsID, $i->idbailleur);
            }
        }

        $bailleurs = Bailleur::whereIn('idbailleur', $invitationsID)->get();


        $locatairesID = [];


        foreach ($bailleurs as $i) {

            if (!array_search($i->idu, $locatairesID)) {

                array_push($locatairesID, $i->idu);
            }
        }

        $utilisateurs = Utilisateur::whereIn('idu', $locatairesID)->get();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.invitationsrecues', compact('locataire', 'utilisateurs', 'bailleurs', 'invitations', 'data'));
    }


    public function invitationsenvoyees()
    {

        $bailleur = Bailleur::where('idu', session('LoggedUser'))->first();

        $invitations = Invitation::where('idbailleur', $bailleur->idbailleur)->get();

        $invitationsID = [];

        foreach ($invitations as $i) {


            if (!array_search($i->idlocataire, $invitationsID)) {

                array_push($invitationsID, $i->idlocataire);
            }
        }


        $locataires = Locataire::whereIn('idlocataire', $invitationsID)->get();

        $locatairesID = [];


        foreach ($locataires as $i) {

            if (!array_search($i->idu, $locatairesID)) {

                array_push($locatairesID, $i->idu);
            }
        }

        $utilisateurs = Utilisateur::whereIn('idu', $locatairesID)->get();

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        return view('admin.invitationsenvoyees', compact('utilisateurs', 'locataires', 'bailleur', 'invitations', 'data'));
    }

    function utilisateurs()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $locataires = Locataire::all();
        $bailleurs = Bailleur::all();
        $users = Utilisateur::paginate(8);
        return view('admin.utilisateurs', compact('data', 'locataires', 'bailleurs', 'users'));
    }


    function rechercherutilisateurs(Request $request)
    {

        $users = Utilisateur::where('role', $request->role)->where('nomcomplet', 'like', '%' . $request->nom . '%')->get();
        $locataires = Locataire::all();
        $bailleurs = Bailleur::all();
        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        return view('admin.utilisateurs', compact('data', 'locataires', 'bailleurs', 'users'));
    }


    function filtrerutilisateurs($role)
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $locataires = Locataire::all();
        $bailleurs = Bailleur::all();
        $users = Utilisateur::where('role', $role)->get();
        return view('admin.utilisateurs', compact('data', 'locataires', 'bailleurs', 'users'));
    }


    function biens()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $bailleurs = Bailleur::where('idu', $data->idu)->first();
        $biens = Bien::where('idbailleur', $bailleurs->idbailleur)->paginate(8);
        $tb = TypeBien::all();
        return view('admin.biens', compact('data', 'tb', 'biens'));
    }



    function rechercherbiens(Request $request)
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $bailleurs = Bailleur::where('idu', $data->idu)->first();
        $biens = Bien::where('nom', 'like', '%' . $request->nom . '%')->where('idbailleur', $bailleurs->idbailleur)->get();
        $tb = TypeBien::all();
        return view('admin.biens', compact('data', 'tb', 'biens'));
    }


    function infosbien($id)
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $bien = Bien::where('idbien', $id)->first();
        $photos = Photo::where('idbien', $bien->idbien)->get();
        $tb = TypeBien::all();
        $pieces = Piece::where('idbien', $bien->idbien)->get();
        $piecesID = [];

        foreach ($pieces as $b) {

            if (!array_search($b->idpiece, $piecesID)) {

                array_push($piecesID, $b->idpiece);
            }
        }


        $equipements = Equipement::whereIn('idpiece', $piecesID)->get();

        return view('admin.infosbien', compact('data', 'photos', 'tb', 'bien', 'pieces', 'equipements'));
    }


    function photosbiens()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $bailleurs = Bailleur::where('idu', $data->idu)->first();
        $biens = Bien::where('idbailleur', $bailleurs->idbailleur)->get();
        $biensID = [];

        foreach ($biens as $b) {

            if (!array_search($b->idbien, $biensID)) {

                array_push($biensID, $b->idbien);
            }
        }

        $photos = Photo::whereIn('idbien', $biensID)->paginate(8);

        return view('admin.photosbiens', compact('data', 'photos', 'biens'));
    }


    function photosbien($id)
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $bailleurs = Bailleur::where('idu', $data->idu)->first();

        $biens = Bien::where('idbailleur', $bailleurs->idbailleur)->get();

        $photos = Photo::where('idbien', $id)->get();

        return view('admin.photosbiens', compact('data', 'photos', 'biens'));
    }


    function typebiens()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $tb = TypeBien::all();
        return view('admin.typebiens', compact('data', 'tb'));
    }


    function typelocations()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $tl = TypeLocation::all();
        return view('admin.typelocations', compact('data', 'tl'));
    }


    function locationsbailleur()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $users = Utilisateur::all();

        if ($data->role == "Bailleur") {

            $bailleur = Bailleur::where('idu', $data->idu)->first();

            $biens = Bien::where('idbailleur', $bailleur->idbailleur)->get();

            $biensID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbien, $biensID)) {

                    array_push($biensID, $b->idbien);
                }
            }

            $locations = Location::whereIn('idbien', $biensID)->get();

            $locationsID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idlocataire, $locationsID)) {

                    array_push($locationsID, $b->idlocataire);
                }
            }

            $locataires = Locataire::whereIn('idlocataire', $locationsID)->get();

            $tl = TypeLocation::all();

            return view('admin.locations', compact('data', 'tl', 'users', 'locations', 'locataires', 'biens'));
        } else {


            $locataire = Locataire::where('idu', $data->idu)->first();

            $locations = Location::where('idlocataire', $locataire->idlocataire)->get();

            $biensID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idbien, $biensID)) {

                    array_push($biensID, $b->idbien);
                }
            }


            $biens = Bien::whereIn('idbien', $biensID)->get();


            $bailleursID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbailleur, $bailleursID)) {

                    array_push($bailleursID, $b->idbailleur);
                }
            }

            $bailleurs = Bailleur::whereIn('idbailleur', $bailleursID)->get();


            $tl = TypeLocation::all();



            return view('admin.locations', compact('data', 'tl', 'users', 'locations', 'bailleurs', 'biens'));
        }
    }


    function packages()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();
        $packages = ModelsPackage::all();
        return view('admin.packages', compact('data', 'packages'));
    }

    function consulterartisans()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $artisans = Artisan::all();

        $domaines = [];

        foreach ($artisans as $b) {

            if (!array_search($b->profession, $domaines)) {

                array_push($domaines, $b->profession);
            }
        }

        $artisans = Artisan::paginate(8);

        $notes = Note::all();

        return view('admin.consulterartisans', compact('data', 'artisans', 'domaines', 'notes'));
    }


    function filtrerartisans($profession)
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $artisans = Artisan::all();

        $domaines = [];

        foreach ($artisans as $b) {

            if (!array_search($b->profession, $domaines)) {

                array_push($domaines, $b->profession);
            }
        }

        $artisans = Artisan::where('profession', 'like', "%" . $profession . "%")->paginate(8);

        $notes = Note::all();

        return view('admin.consulterartisans', compact('data', 'artisans', 'domaines', 'notes'));
    }


    function artisan($id)
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $artisan = Artisan::where('idartisan', $id)->first();

        $notes = Note::where('idartisan', $id)->get();

        return view('admin.artisan', compact('data', 'artisan', 'notes'));
    }


    function interventions()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $users = Utilisateur::all();

        if ($data->role == "Bailleur") {

            $bailleur = Bailleur::where('idu', $data->idu)->first();

            $biens = Bien::where('idbailleur', $bailleur->idbailleur)->get();

            $biensID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbien, $biensID)) {

                    array_push($biensID, $b->idbien);
                }
            }

            $renovations = Renovation::whereIn('idbien', $biensID)->get();


            $artisansID = [];

            foreach ($renovations as $b) {

                if (!array_search($b->idartisan, $artisansID)) {

                    array_push($artisansID, $b->idartisan);
                }
            }

            $artisans = Artisan::all();

            return view('admin.renovation', compact('data', 'artisans', 'renovations', 'biens', 'users'));
        } else {


            $locataire = Locataire::where('idu', $data->idu)->first();

            $locations = Location::where('idlocataire', $locataire->idlocataire)->get();

            $locationsID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idlocation, $locationsID)) {

                    array_push($locationsID, $b->idlocation);
                }
            }

            $biens = Bien::whereIn('idbien', $locationsID)->get();

            $biensID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbien, $biensID)) {

                    array_push($biensID, $b->idbien);
                }
            }

            $renovations = Renovation::whereIn('idbien', $biensID)->get();


            $artisansID = [];

            foreach ($renovations as $b) {

                if (!array_search($b->idartisan, $artisansID)) {

                    array_push($artisansID, $b->idartisan);
                }
            }

            $artisans = Artisan::all();

            return view('admin.renovation', compact('data', 'artisans', 'renovations', 'biens', 'users'));
        }
    }

    function articles()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $bailleur = Bailleur::where('idu', session('LoggedUser'))->first();

        $articles = Article::where('idbailleur', $bailleur->idbailleur)->get();

        $tb = TypeBien::all();

        return view('admin.articles', compact('data', 'articles', 'tb'));
    }


    function inventaires()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $users = Utilisateur::all();

        if ($data->role == "Bailleur") {

            $bailleur = Bailleur::where('idu', $data->idu)->first();

            $biens = Bien::where('idbailleur', $bailleur->idbailleur)->get();

            $biensID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbien, $biensID)) {

                    array_push($biensID, $b->idbien);
                }
            }

            $inventaires = Inventaire::whereIn('idbien', $biensID)->get();


            $pieces = Piece::whereIn('idbien', $biensID)->get();

            $piecesID = [];

            foreach ($pieces as $b) {

                if (!array_search($b->idpiece, $piecesID)) {

                    array_push($piecesID, $b->idpiece);
                }
            }


            $equipements = Equipement::whereIn('idpiece', $piecesID)->get();



            return view('admin.inventaires', compact('data', 'inventaires', 'biens', 'users', 'pieces', 'equipements'));
        } else {


            $locataire = Locataire::where('idu', $data->idu)->first();

            $locations = Location::where('idlocataire', $locataire->idlocataire)->get();

            $locationsID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idbien, $locationsID)) {

                    array_push($locationsID, $b->idbien);
                }
            }

            $biens = Bien::whereIn('idbien', $locationsID)->get();

            $biensID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbien, $biensID)) {

                    array_push($biensID, $b->idbien);
                }
            }

            $inventaires = Inventaire::whereIn('idbien', $biensID)->get();

            $pieces = Piece::whereIn('idbien', $biensID)->get();

            $piecesID = [];

            foreach ($pieces as $b) {

                if (!array_search($b->idpiece, $piecesID)) {

                    array_push($piecesID, $b->idpiece);
                }
            }


            $equipements = Equipement::whereIn('idpiece', $piecesID)->get();


            return view('admin.inventaires', compact('data', 'inventaires', 'biens', 'users', 'pieces', 'equipements'));
        }
    }


    function configinventaire($id)
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $bailleur = Bailleur::where('idu', $data->idu)->first();

        $inventaires = Inventaire::where('idinventaire', $id)->first();

        $bien = Bien::where('idbien', $inventaires->idbien)->first();

        $pieces = Piece::where('idbien', $bien->idbien)->get();

        $piecesID = [];

        foreach ($pieces as $b) {

            if (!array_search($b->idpiece, $piecesID)) {

                array_push($piecesID, $b->idpiece);
            }
        }


        $equipements = Equipement::whereIn('idpiece', $piecesID)->get();


        return view('admin.configinventaire', compact('data', 'inventaires', 'bien', 'pieces', 'equipements'));
    }



    function etatlieux()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $users = Utilisateur::all();

        if ($data->role == "Bailleur") {

            $bailleur = Bailleur::where('idu', $data->idu)->first();

            $biens = Bien::where('idbailleur', $bailleur->idbailleur)->get();

            $biensID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbien, $biensID)) {

                    array_push($biensID, $b->idbien);
                }
            }

            $etatlieux = EtatLieux::whereIn('idbien', $biensID)->get();


            $pieces = Piece::whereIn('idbien', $biensID)->get();


            return view('admin.etatlieux', compact('data', 'etatlieux', 'biens', 'users', 'pieces'));
        } else {


            $locataire = Locataire::where('idu', $data->idu)->first();

            $locations = Location::where('idlocataire', $locataire->idlocataire)->get();

            $locationsID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idbien, $locationsID)) {

                    array_push($locationsID, $b->idbien);
                }
            }

            $biens = Bien::whereIn('idbien', $locationsID)->get();

            $biensID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbien, $biensID)) {

                    array_push($biensID, $b->idbien);
                }
            }

            $etatlieux = EtatLieux::whereIn('idbien', $biensID)->get();

            $pieces = Piece::whereIn('idbien', $biensID)->get();

            return view('admin.etatlieux', compact('data', 'etatlieux', 'biens', 'users', 'pieces'));
        }
    }


    function configetatlieux($id)
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $bailleur = Bailleur::where('idu', $data->idu)->first();

        $etatlieux = EtatLieux::where('idetatlieu', $id)->first();

        $bien = Bien::where('idbien', $etatlieux->idbien)->first();

        $pieces = Piece::where('idbien', $bien->idbien)->get();

        $piecesID = [];

        foreach ($pieces as $b) {

            if (!array_search($b->idpiece, $piecesID)) {

                array_push($piecesID, $b->idpiece);
            }
        }


        return view('admin.configetatlieux', compact('data', 'etatlieux', 'bien', 'pieces'));
    }


    function factures()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $users = Utilisateur::all();

        if ($data->role == "Bailleur") {

            $bailleurs = Bailleur::where('idu', $data->idu)->first();

            $biens = Bien::where('idbailleur', $bailleurs->idbailleur)->get();

            $locationsID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbien, $locationsID)) {

                    array_push($locationsID, $b->idbien);
                }
            }

            $locations = Location::whereIn('idbien', $locationsID)->get();

            $locationsID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idlocation, $locationsID)) {

                    array_push($locationsID, $b->idlocation);
                }
            }


            $factures = Facture::whereIn('idlocation', $locationsID)->get();

            $locationsID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idlocataire, $locationsID)) {

                    array_push($locationsID, $b->idlocataire);
                }
            }


            $locataires = Locataire::whereIn('idlocataire', $locationsID)->get();

            return view('admin.factures', compact('data', 'biens', 'factures', 'locataires', 'locations', 'users'));
        } else {


            $locataire = Locataire::where('idu', $data->idu)->first();

            $locations = Location::where('idlocataire', $locataire->idlocataire)->get();

            $locationsID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idlocation, $locationsID)) {

                    array_push($locationsID, $b->idlocation);
                }
            }


            $factures = Facture::whereIn('idlocation', $locationsID)->get();


            $locationsID = [];

            foreach ($locations as $b) {

                if (!array_search($b->idbien, $locationsID)) {

                    array_push($locationsID, $b->idbien);
                }
            }


            $biens = Bien::whereIn('idbien', $locationsID)->get();


            $locationsID = [];

            foreach ($biens as $b) {

                if (!array_search($b->idbailleur, $locationsID)) {

                    array_push($locationsID, $b->idbailleur);
                }
            }


            $bailleurs = Bailleur::whereIn('idbailleur', $locationsID)->get();


            return view('admin.factures', compact('data', 'factures', 'biens', 'bailleurs', 'locations', 'users'));
        }
    }


    function transactions()
    {

        $data = Utilisateur::where('idu', session('LoggedUser'))->first();

        $bailleur = Bailleur::where('idu', session('LoggedUser'))->first();

        $transactions = Transaction::where('recepteur', $bailleur->idbailleur)->get();

        $users = Utilisateur::all();

        return view('admin.transactions', compact('data', 'users', 'transactions', 'users'));
    }
}
