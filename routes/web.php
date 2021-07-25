<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'home')->name('home');


Route::view('/quienes-somos', 'about')->name('about');

Route::resource('client', 'ClientController')
    ->names('clients');

Route::resource('pais', 'PaisController');
Route::resource('periodos', 'PeriodoController');
Route::resource('estados', 'EstadoController');
Route::resource('tiposcli', 'TipocliController')
    ->names('clitipos');
Route::resource('colors', 'ColorController')
    ->names('colores');

Route::view('/contacto', 'contact')
    ->name('contact');
/** Para enviar mensajes al correo electrónico desde la vista */
Route::post('contact', 'MessageController@store')
    ->name('messages.store');

/** Rutas para la importación de archivos de Excel */
Route::get("import-prov", "ImportprovController@index")
    ->name("import.index");
Route::post("import-prov", "ImportprovController@importprov")
    ->name("import.importprov");

/** Rutas para la importación de archivos de Excel */
Route::get("importdet-prov", "ImportdetprovController@index")
    ->name("importdet.index");
Route::post("importdet-prov", "ImportdetprovController@importdetprov")
    ->name("importdet.importdetprov");

Route::get("importrolmag", "ImportrolController@index")
    ->name("importrol.index");
Route::post("importrolmag", "ImportrolController@importrolmes")
    ->name("importrol.importrol");
Auth::routes();

/** Para Reportes */
Route::get("reporolmes", "ReporRolmesController@index")
    ->name("repormes.index");
Route::get("reporolmes/{perfilter}", "ReporRolmesController@show")
    ->name("repormes.show");

//Route::get('/home', 'HomeController@index')->name('home');
