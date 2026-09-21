<?php

namespace App\Http\Controllers;

use App\Models\Credito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpedienteController extends Controller
{
    /**
     * Mostrar la pantalla de consulta.
     */
    public function index()
    {
        return view('solicitud.index');
    }


    


}