<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instituicao>
 */
class InstituicaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->company(mt_rand(2,3));
        $slug = substr(preg_replace('~\S\K\S*\s*~u', '', mb_strtoupper($name)), 0, 3);
        $slug = strlen($slug) <= 2 ? substr(mb_strtoupper($name), 0, 3) : $slug;

        return [
            'name' => $name,
            'slug' => $slug
        ];
    }
}
