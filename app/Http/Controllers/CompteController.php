<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil()
    {
        if (auth()->guest()) {
            return redirect('/connexion')->withErrors([
                'email' => "Vous devez être connecté pour voir cette page.",
            ]);
        }

        return view('mon-compte');
    }

    public function deconnexion()

    {
    auth()->logout();

    return redirect('/connexion');
    }



    public function modificationEmail()
    {
        request()->validate([
            'email' => ['required', 'email'],
        ]);
        
        auth()->user()->update([
            'email' => (request('pseudo')),
        ]);
    }


    public function modificationMotDePasse()
    {
    request()->validate([
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
    ]);

    auth()->user()->update([
        'mot_de_passe' => bcrypt(request('password')),
    ]);

    }

}
