<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers ;

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

Route::get('/home', 'App\Http\Controllers\ProductController@homearticles')->name('home');

Route::get('/base', function (){
    return view('base');
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

    return 'Bonjour'. request('nom') . request ('prenom');
    return 'Formulaire bien';
});

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@formulaire');
Route::post('/connexion', 'App\Http\Controllers\ConnexionController@traitement');

Route::get('/utilisateurs', 'App\Http\Controllers\UtilisateursController@liste');

Route::get ('/mon-compte', 'App\Http\Controllers\CompteController@accueil');

Route::get('/deconnexion', 'App\Http\Controllers\CompteController@deconnexion');

Route::get('/articles', 'App\Http\Controllers\ProductController@articles')->name('articles');

Route::get('/articles/{id_article}', 'App\Http\Controllers\ProductController@voirArticle')->name('article');

Route::get('/{email}', 'App\Http\Controllers\UtilisateursController@voir');