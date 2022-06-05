<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerTotalsController as PT;
use App\Http\Controllers\RosterController as RC;

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
Route::group(['prefix' => 'export'], function() {
    Route::group(['prefix' => 'player-stats'], function(){
        Route::get('team/{team}', [PT::class, 'ExportByTeam']);
        Route::get('player/{playerName}', [PT::class, 'ExportByPlayer']);
        Route::get('position/{position}', [PT::class, 'ExportByPosition']);
    });
    Route::group(['prefix' => 'players'], function(){
        Route::get('team/{team}', [RC::class, 'ExportByTeam']);
        Route::get('player/{playerName}', [RC::class, 'ExportByPlayer']);
    });
});
