<?php

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
        Schema::create('medicos', function (Blueprint $table) {
            $table->string('cpf')->primary();
            $table->string('nome');
            $table->string('telefone');
            $table->string('genero');
            $table->unsignedBigInteger('crm');
            $table->foreignId('tipo_consulta_id')
                ->constrained('tipo_consultas')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('usuario_sistema_id')
                ->constrained('usuario_sistemas')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
