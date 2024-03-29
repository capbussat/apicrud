<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// route és precedit per 'api/' perquè som al fitxer api.php

// Podem crear un grup per estalviar-nos feina futura si hi ha moltes apis
Route::group([ 
    // Podríem afegir una versió v1 a la ruta amb un prefix de versió
    // 'prefix'=>'v1',
    // namespace ens estalvia escriure App\Http\Controllers\Api
    'namespace' =>'App\Http\Controllers\Api'], function() {
        // posts serà un endpoint
        Route::apiResource('posts', PostController::class)->except(['create', 'show', 'edit']);
        // creem les rutes al controlador excepte per  'create', 'show', 'edit' que no calen
    
    }
);
