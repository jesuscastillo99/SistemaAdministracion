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
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id(); // INT IDENTITY(1,1) PRIMARY KEY
            $table->string('nombre', 150); // NVARCHAR(150) NOT NULL
            $table->boolean('activo')->default(true); // BIT NOT NULL DEFAULT 1
        });

        // Sin timestamps, tal cual tu diseño original
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departamentos');
    }
};
