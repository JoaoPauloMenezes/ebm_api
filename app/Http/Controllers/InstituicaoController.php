<?php

namespace App\Http\Controllers;

use App\Models\Instituicao;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function show(): array
    {
        $instrucoes = Instituicao::all()->toArray();

        return array_map(function($tag) {
            return array(
                'name' => $tag['name'],
                'value' => $tag['slug']
            );},
            $instrucoes);
    }
}
