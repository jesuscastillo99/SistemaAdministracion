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
        Schema::create('verificacion_documentos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('credito_id')->unique();

            $table->boolean('existe_expediente')->nullable();
            $table->dateTime('fecha_verificacion')->nullable();

            $table->boolean('existe_pagare')->nullable();
            $table->unsignedInteger('cantidad_pagares')->nullable();

            $table->boolean('existe_convenio')->nullable();
            $table->unsignedTinyInteger('cantidad_convenios')->nullable();

            $table->foreign('credito_id')
                ->references('id')
                ->on('creditos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verificacion_documentos');
    }
};
