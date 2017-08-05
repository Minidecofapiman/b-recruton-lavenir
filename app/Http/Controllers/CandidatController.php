<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatController extends Controller
{
    
    public function getAll(){
        return array(
            array(
                'nom'       => 'back nom',
                'prenom'    => 'back prenom',
                'email'     => 'back email',
            ));
    }

}
