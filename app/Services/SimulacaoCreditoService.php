<?php

namespace App\Services;

use App\Models\CoeficienteEmprestimo;
use App\Models\Instituicao;
use Illuminate\Database\Eloquent\Collection;

class SimulacaoCreditoService
{
    public static function calcularSimulacao(array $dados)
    {
        $intituicoes = SimulacaoCreditoService::buscaCoeficientesPelaInstituicao($dados['instituicoes'], $dados['convenios']);

        return $intituicoes;
    }

    private static function buscaCoeficientesPelaInstituicao(array $instituicoes, array $convenios): Collection
    {
        return Instituicao::with('coeficienteEmprestimo')
                ->where('slug', $instituicoes)
                ->get();
    }
}