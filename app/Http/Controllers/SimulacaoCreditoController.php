<?php

namespace App\Http\Controllers;

use App\Enums\Convenio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SimulacaoCreditoController extends Controller
{
    public function show(Request $request): void
    {
        try {
            //code...
            $validatedData = $request->validate([
                'valor_emprestimo' => 'required|numeric|min:1',
                'parcela' => 'numeric|min:1',
                'convenios' => ["array", Rule::in(Convenio::cases())]
            ]);
        } catch (\Throwable $th) {
            echo 'Erro: ' . $th->getMessage();
        }
        //print_r($request->all());
    }
}
