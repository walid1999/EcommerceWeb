<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utilisateur;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeUser;

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

        Mail::to($utilisateur)->send(new welcomeUser);

        flash('Vous êtes bien inscrits')->success();
        return redirect('/connexion');
    }
}
