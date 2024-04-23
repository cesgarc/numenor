<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    /**
     * Lista de Agencias.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listarAgencias()
    {
        //Llamado a la Vista
        return view('listaragencias');
    }
}
