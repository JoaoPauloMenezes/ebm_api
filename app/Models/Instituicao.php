<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    /** @use HasFactory<\Database\Factories\InstituicaoFactory> */
    use HasFactory;

    protected $primaryKey = "instituicaoId";

    public function uniqueIds(): array
{
    return [
        'slug'
    ];
}

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
    ];
}
