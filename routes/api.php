<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/** Esta línea roduce error de rutas y no pueden ser cacheables, es necesario bloquear o reemplazar
 * con la línea de código que está abajo
 */

/**  Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/** Route::middleware('auth:api')->get('/user', 'UserController@AuthRouteAPI');*/
