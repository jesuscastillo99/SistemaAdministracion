<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /*
     * Tabla asociada al modelo.
     */
    protected $table = 'usuarios';

    /*
     * La tabla usuarios no utiliza automáticamente
     * created_at ni updated_at.
     */
    public $timestamps = false;

    /*
     * Campos permitidos para asignación masiva.
     */
    protected $fillable = [
        'usuario',
        'nombre',
        'correo',
        'password',
        'departamento_id',
    ];

    /*
     * Campos que no deben mostrarse cuando
     * el modelo sea serializado.
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Conversión automática de atributos.
     */
    protected function casts(): array
    {
        return [
            /*
             * Laravel aplicará automáticamente Hash::make()
             * cuando una contraseña sin hash sea asignada
             * mediante Eloquent.
             */
            'password' => 'hashed',
        ];
    }

    /**
     * Departamento al que pertenece el usuario.
     */
    public function departamento()
    {
        return $this->belongsTo(
            Departamento::class
        );
    }

    /**
     * Verificaciones de expedientes realizadas
     * por este usuario.
     */
    public function verificacionesExpediente()
    {
        return $this->hasMany(
            VerificacionDocumento::class,
            'usuario_verifico_expediente_id'
        );
    }
}