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

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire');
Route::post('/inscription', 'App\Http\Controllers\InscriptionController@traitement');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@formulaire');
Route::post('/connexion', 'App\Http\Controllers\ConnexionController@traitement');

Route::get('/utilisateurs', 'App\Http\Controllers\UtilisateursController@liste');

Route::get ('/mon-compte', 'App\Http\Controllers\CompteController@accueil');

Route::get('/deconnexion', 'App\Http\Controllers\CompteController@deconnexion');

Route::get('/articles', 'App\Http\Controllers\ProductController@articles')->name('articles');

Route::get('/articles/{id_article}', 'App\Http\Controllers\ProductController@voirArticle')->name('article');
<<<<<<< Updated upstream
=======

Route::get('/{email}', 'App\Http\Controllers\UtilisateursController@voir');


/*panier */

Route::post('panier/ajouter', 'App\Http\Controllers\CartController@store')->name('panier');
>>>>>>> Stashed changes
