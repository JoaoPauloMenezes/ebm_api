<?php

use App\Enums\Convenio;
use App\Models\Instituicao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coeficiente_emprestimos', function (Blueprint $table) {
            $table->id();
            $table->float('taxa');
            $table->foreignId('instituicao_id');
            $table->enum('convenio', array_column(Convenio::cases(), 'value'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coeficiente_emprestimos');
    }
};
