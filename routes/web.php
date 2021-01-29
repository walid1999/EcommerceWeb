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

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@formulaire')->name('inscription');
Route::post('/inscription', 'App\Http\Controllers\InscriptionController@traitement');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@formulaire');
Route::post('/connexion', 'App\Http\Controllers\ConnexionController@traitement')->name('connexion');

Route::get('/utilisateurs', 'App\Http\Controllers\UtilisateursController@liste');

/*Mon compte*/
Route::get ('/mon-compte', 'App\Http\Controllers\CompteController@accueil')->name('mon-compte');

/*deconnexion*/
Route::get('/deconnexion', 'App\Http\Controllers\CompteController@deconnexion')->name('deconnexion');

/*modification compte*/
Route::post('/modification-mot-de-passe', 'App\Http\Controllers\CompteController@modificationEmail');
Route::post('/modification-mot-de-passe', 'App\Http\Controllers\CompteController@modificationMotDePasse');

/*route article*/
Route::get('/articles', 'App\Http\Controllers\ProductController@articles')->name('articles');
Route::get('/articles/{id}', 'App\Http\Controllers\ProductController@voirArticle')->name('article');



/*panier */
Route::get('/panier', 'App\Http\Controllers\CartController@index')->name('monpanier');
Route::post('panier/ajouter', 'App\Http\Controllers\CartController@store')->name('store');
Route::delete('/panier/{rowId}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');

Route::get('/videpanier', function () {
    Cart::destroy();
});


Route::get('/recherche', 'App\Http\Controllers\ProductController@search')->name('recherche');



