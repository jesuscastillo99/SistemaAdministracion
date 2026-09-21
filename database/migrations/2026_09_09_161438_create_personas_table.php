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
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 100);
            $table->char('curp', 18)->nullable();

            $table->string('calle', 200)->nullable();
            $table->string('numero_exterior', 30)->nullable();
            $table->string('colonia', 100)->nullable();
            $table->string('localidad', 100)->nullable();
            $table->string('municipio', 100)->nullable();
            $table->string('telefono', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
