<?php

namespace App\Http\Controllers;

use App\Enums\Convenio;
use App\Services\SimulacaoCreditoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SimulacaoCreditoController extends Controller
{
    public function show(Request $request): string|false
    {
        try {
            //code...
            $validatedData = $request->validate([
                'valor_emprestimo' => 'required|numeric|min:1',
                'parcela' => 'numeric|min:1',
                'convenios' => ["array", Rule::in(Convenio::cases())],
                'instituicoes' => 'array'
            ]);

            return json_encode(SimulacaoCreditoService::calcularSimulacao($validatedData));
        } catch (\Throwable $th) {
            return 'Erro: ' . $th->getMessage();
        }
    }
}
