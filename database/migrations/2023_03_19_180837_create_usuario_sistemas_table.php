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
        Schema::create('usuario_sistemas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('senha');
            $table->foreignId('secretario_id')
                ->constrained('secretarios')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('tipo_usuario_id')
                ->constrained('tipo_usuarios')
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
        Schema::dropIfExists('usuario_sistemas');
    }
};
