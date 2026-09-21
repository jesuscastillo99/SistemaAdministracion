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
        Schema::table('verificacion_documentos', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_verifico_expediente_id')
                ->nullable()
                ->after('fecha_verificacion');

            $table->foreign('usuario_verifico_expediente_id')
                ->references('id')
                ->on('usuarios')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('verificacion_documentos', function (Blueprint $table) {
            $table->dropForeign([
                'usuario_verifico_expediente_id',
            ]);

            $table->dropColumn('usuario_verifico_expediente_id');
        });
    }
};
