<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat as Candidat;
use Illuminate\Support\Facades\Input as Input;

class CandidatController extends Controller
{
    
    public function getAll(){

        // Select * 
        $response = Candidat::get();

        // Select where id = 1
        // $response = Candidat::where('id', 1)
        //                      ->get();

        // Select nom where id = 1
        // $response = Candidat::select('nom')
        //                      ->where('id', 1)
        //                      ->get();

        return $response;
    }


    public function add(){

        extract(Input::all());

        // une nouvelle ligne à inserer dans le tableau
        $newCandidat = new Candidat;

        // newLigne->nomColone = valeur
        $newCandidat->nom     = $nom;
        $newCandidat->prenom  = $prenom;
        $newCandidat->email   = $email;

        // enregistrer
        $newCandidat->save();

        return 'ok';
    }

}
