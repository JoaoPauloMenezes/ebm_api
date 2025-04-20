<?php

namespace App\Http\Controllers;

use App\Enums\Convenio;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    public function show(): array
    {
        return array_map(fn ($case) => array("chave" => $case->name, "value" => $case->value) ,Convenio::cases());
    }
}
