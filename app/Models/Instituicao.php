<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instituicao extends Model
{
    /** @use HasFactory<\Database\Factories\InstituicaoFactory> */
    use HasFactory;

    public function uniqueIds(): array
    {
        return [
            'slug'
        ];
    }

    /**
     * Interact with the  attribute.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function value(): Attribute
    {
        return Attribute::make(
            get: fn ( $value ) => $this->slug
        );
    }

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = [
        'name',
        'slug',
    ];

    /**
     * Get all of the coeficienteEmprestimo for the Instituicao
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coeficienteEmprestimo(): HasMany
    {
        return $this->hasMany(CoeficienteEmprestimo::class, 'instituicao_id', 'id');
    }
}
