<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Agregar los campos nombre y correo
     * a la tabla usuarios.
     */
    public function up(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {

            /*
             * Los dejamos nullable porque actualmente ya existen
             * usuarios en la base de datos que no tienen estos datos.
             */
            $table->string('nombre', 150)
                ->nullable()
                ->after('usuario');

            $table->string('correo', 150)
                ->nullable()
                ->unique()
                ->after('nombre');
        });
    }

    /**
     * Revertir los cambios realizados.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {

            /*
             * Primero eliminamos el índice UNIQUE de correo.
             */
            $table->dropUnique(['correo']);

            /*
             * Después eliminamos las columnas.
             */
            $table->dropColumn([
                'nombre',
                'correo',
            ]);
        });
    }
};