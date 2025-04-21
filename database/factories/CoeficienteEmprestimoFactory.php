<?php

namespace Database\Factories;

use App\Enums\Convenio;
use App\Models\Instituicao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoeficienteEmprestimo>
 */
class CoeficienteEmprestimoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'instituicao_id' => Instituicao::inRandomOrder()->first()->id,
            'convenio' => fake()->randomElement(array_column(Convenio::cases(), 'value')),
            'taxa' => fake()->randomFloat(2, 0.5, 5.0),
        ];
    }
}
