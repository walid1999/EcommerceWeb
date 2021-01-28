<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if ($resultat) {
            flash('Vous etes bien connecté')->success();
            return redirect('/mon-compte');
        }else{
            flash('Mauvais identifiant!')->error();
            return back();
        }
    }
}
