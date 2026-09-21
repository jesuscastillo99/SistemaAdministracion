<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    public function run(): void
    {
        $departamentos = [
            'Evaluación y Sistemas',
            'Promoción y Servicios',
            'Cartera y Recuperación',
            'Administración y Finanzas',
            'Dirección General',
        ];

        foreach ($departamentos as $nombre) {
            Departamento::create([
                'nombre' => $nombre,
                'activo' => true,
            ]);
        }
    }
}