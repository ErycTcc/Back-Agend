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
        Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('agendamento');
            $table->string('descricao');
            $table->string('status');
            $table->unsignedBigInteger('agenda_id');
            $table->foreign('agenda_id')
                ->references('id')
                ->on('agendas')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('cpf_paciente');
            $table->foreign('cpf_paciente')
                ->references('cpf')
                ->on('pacientes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('cpf_medico');
            $table->foreign('cpf_medico')
                ->references('cpf')
                ->on('medicos')
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
        Schema::dropIfExists('consultas');
    }
};
