<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home');
});

Route::get('/base', function (){
    return view('base');
});


Route::get('/inscription', function (){
    return view('inscription');
});

Route::post('/inscription', function() {
    $utilisateur = new App\Utilisateur;
    $utilisateur->nom = request('nom');
    $utilisateur->prenom = request('prenom');
    $utilisateur->mot_de_passe = bcrypot(request('password'));
    $utilisateur->adresse = request('adresse');
    $utilisateur->email = request('email');

    return 'Bonjour Monsieur '. request('email');
    return 'Formulaire bien';
});