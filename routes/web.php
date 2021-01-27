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

Route::get('/articles', function (){
    return view('articles');
});

Route::post('/inscription', function() {
    request () ->validate([ /** Vérification des champs, l'utilisateur devra joindre des informations correcte pour poursuivre son inscription */
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
    ], [
        'password.min' => 'Pour des raisons de sécurité; votre mot de passe doit faire :min caractères.'
    ]);


    $utilisateur = new App\Utilisateur;
    $utilisateur->nom = request('nom');
    $utilisateur->prenom = request('prenom');
    $utilisateur->password = bcrypt(request('password'));
    $utilisateur->adresse = request('adresse');
    $utilisateur->email = request('email');

    $utilisateur->save();

    return 'Bonjour Monsieur '. request('nom') . request ('prenom');
    return 'Formulaire bien';
});

Route::get('/utilisateurs', function () {
    $utilisateurs = App\Utilisateur::all(); /** Récupérer toutes les données d'une table */

    return view('utilisateurs', [
        'utilisateurs' => $utilisateurs,
    ]);
});

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@formulaire');
Route::post('/connexion', 'App\Http\Controllers\ConnexionController@traitement');