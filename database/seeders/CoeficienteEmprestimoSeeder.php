<?php

namespace Database\Seeders;

use App\Models\CoeficienteEmprestimo;
use App\Models\Instituicao;
use Illuminate\Database\Seeder;

class CoeficienteEmprestimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CoeficienteEmprestimo::factory()
            ->count(50)
            ->create();
    }
}
