<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function index()
    {
        return view('entidad.entidad');
    }
}
