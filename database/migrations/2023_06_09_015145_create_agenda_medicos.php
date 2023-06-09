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
        Schema::create('agenda_medicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data');
            $table->time('hora_inicio');
            $table->time('hora_termino');
            $table->boolean('status')->default(false);
            $table->string('cpf');
            $table->foreign('cpf')
                ->references('cpf')
                ->on('medicos')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('agenda_id')
                ->constrained('agendas')
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
        Schema::dropIfExists('agenda_medicos');
    }
};
