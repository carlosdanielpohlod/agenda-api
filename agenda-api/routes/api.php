<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContatoController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('Api')->name('api.')->group(function(){
    Route::prefix('/contatos')->group(function(){

       Route::get('/',[ContatoController::class, 'index'])->name('contatos');
       Route::get('/{id}',[ContatoController::class,'show'])->name('contatoEspecifico');
       Route::post('/novo-contato',[ContatoController::class,'store'])->name('contatoStore');
    });
});
