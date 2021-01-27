<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        return view ('mon-compte');
        if (auth()->guest()){
            return redirect ('/connexion')->withErrors([
                'email' => "Vous devez être connecté pour voir cette page.",
            ]);
        }
    }
}
