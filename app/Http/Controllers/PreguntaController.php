<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Lista de Preguntas.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listarPreguntas()
    {
        //Llamado a la Vista
        return view('listarpreguntas');
    }
}
