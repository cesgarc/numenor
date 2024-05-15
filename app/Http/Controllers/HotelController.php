<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Lista de Hoteles.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listarHoteles()
    {
        //Llamado a la Vista
        return view('listarhoteles');
    }
    /**
     * Lista de Niveles.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listarNiveles()
    {
        //Llamado a la Vista
        return view('listarniveles');
    }
    /**
     * Crear Hotel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function crearHotel()
    {
        //Llamado a la Vista
        return view('crearhotel');
    }
    /**
     * Ver Hotel.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verHotel()
    {
        //Llamado a la Vista
        return view('verhotel');
    }
}
