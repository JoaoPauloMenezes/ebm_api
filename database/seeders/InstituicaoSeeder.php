<?php

namespace Database\Seeders;

use App\Models\Instituicao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstituicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instituicao::factory(10)->create();
    }
}
