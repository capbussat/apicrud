<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TrelloController;

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

// route és precedit per 'api/' perquè som al fitxer api.php

 Route::apiResource('trellos', TrelloController::class)->except(['show', 'edit']);
 Route::post('/cards/up', [TrelloController::class, 'up'])->name('cards.up');
 Route::post('/cards/down', [TrelloController::class, 'down'])->name('cards.down');

// creem les rutes al controlador excepte per  'show' i 'edit' que no calen






