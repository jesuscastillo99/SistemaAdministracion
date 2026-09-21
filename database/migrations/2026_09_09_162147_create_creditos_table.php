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
        Schema::create('creditos', function (Blueprint $table) {
        $table->increments('id');

        $table->integer('expediente')->unique();

        $table->unsignedInteger('estudiante_id');
        $table->unsignedInteger('aval_id')->nullable();

        $table->decimal('deuda_original', 12, 2)->nullable();
        $table->decimal('deuda_vencida', 12, 2)->nullable();
        $table->decimal('deuda_por_vencer', 12, 2)->nullable();
        $table->decimal('deuda_total', 12, 2)->nullable();
        $table->decimal('total_reintegro', 12, 2)->nullable();

        $table->decimal('capital_vencido', 15, 2)->nullable();
        $table->decimal('interes_normal_vencido', 15, 2)->nullable();
        $table->decimal('moratorio', 15, 2)->nullable();
        $table->decimal('cobranza', 15, 2)->nullable();

        $table->decimal('reintegro_capital', 15, 2)->nullable();
        $table->decimal('reintegro_interes_normal', 15, 2)->nullable();
        $table->decimal('reintegro_moratorio', 15, 2)->nullable();
        $table->decimal('reintegro_cobranza', 15, 2)->nullable();

        $table->decimal('condonacion_capital', 10, 2)->nullable();
        $table->decimal('condonacion_normal', 10, 2)->nullable();
        $table->decimal('condonacion_moratorio', 12, 2)->nullable();
        $table->decimal('condonacion_cobranza', 12, 2)->nullable();

        $table->decimal('saldo_capital', 12, 2)->nullable();
        $table->decimal('saldo_normal', 12, 2)->nullable();
        $table->decimal('saldo_moratorio', 12, 2)->nullable();
        $table->decimal('saldo_cobranza', 12, 2)->nullable();

        $table->date('fecha_primer_vencimiento')->nullable();

        $table->decimal('capital_prestado', 12, 2)->nullable();
        $table->decimal('normal_prestado', 12, 2)->nullable();

        $table->unsignedInteger('estatus_id')->nullable();

        $table->integer('meses_vencidos')->nullable();

        $table->unsignedInteger('situacion_id')->nullable();

        $table->date('fecha_terminacion')->nullable();

        $table->decimal('reintegro_mes_actual', 12, 2)->nullable();

        $table->tinyInteger('reestructura')->nullable();

        $table->date('fecha_ultimo_reintegro')->nullable();

        $table->string('cuenta_ultimo_reintegro', 20)->nullable();
        $table->string('periodo_maximo', 10)->nullable();
        $table->string('periodo_minimo', 10)->nullable();

        $table->unsignedInteger('carrera_id')->nullable();
        $table->unsignedInteger('escuela_id')->nullable();

        $table->date('fecha_reestructura')->nullable();
        $table->date('fecha_vencimiento')->nullable();

        $table->decimal('preventiva', 10, 2)->nullable();

        $table->date('fecha_importacion')->nullable();


        /*
        |--------------------------------------------------------------------------
        | Llaves foráneas
        |--------------------------------------------------------------------------
        */

        $table->foreign('estudiante_id')
            ->references('id')
            ->on('personas');

        $table->foreign('aval_id')
            ->references('id')
            ->on('personas');

        $table->foreign('estatus_id')
            ->references('id')
            ->on('cat_estatus');

        $table->foreign('situacion_id')
            ->references('id')
            ->on('cat_situacion');

        $table->foreign('carrera_id')
            ->references('id')
            ->on('cat_carreras');

        $table->foreign('escuela_id')
            ->references('id')
            ->on('cat_escuelas');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creditos');
    }
};
