<?php

namespace App\Models;

use App\Enums\Convenio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoeficienteEmprestimo extends Model
{
    /** @use HasFactory<\Database\Factories\CoeficienteEmprestimoFactory> */
    use HasFactory;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'convenio' => Convenio::class,
    ];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = [
        'convenio',
        'taxa',
        'instituicao_id'
    ];

    /**
     * Get the instituicao that owns the CoeficienteEmprestimo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instituicoes(): BelongsTo
    {
        return $this->belongsTo(Instituicao::class, 'instituicao_id', 'id');
    }
}
