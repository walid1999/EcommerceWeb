<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
            'nom' => ['required'],
            'prenom' => ['required'],
            'adresse' => ['required']
        ]);

        $utilisateur = Utilisateur::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'adresse' => request('adresse')
        ]);

        flash('Vous etes bien inscris')->success();
        return redirect('/mon-compte');
    }
}
