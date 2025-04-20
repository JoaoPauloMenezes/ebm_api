<?php

use App\Http\Controllers\InstituicaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instituicoes', [InstituicaoController::class, 'show']);