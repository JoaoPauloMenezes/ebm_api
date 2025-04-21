<?php

use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\SimulacaoCreditoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instituicoes', [InstituicaoController::class, 'show']);
Route::get('/convenios', [ConvenioController::class, 'show']);

Route::prefix('/simulacao')->group(function () {
    Route::post('/credito', [SimulacaoCreditoController::class, 'show']);
});