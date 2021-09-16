<?php

namespace App\Http\Controllers;

use App\Models\Normatividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NormatividadController extends Controller
{
    public function index()
    {
        $normatividad = Normatividad::all();
        return view('normatividad.acuerdos-leyes-resoluciones', ['normatividad' => $normatividad]);
    }

    public function ConvocatoriasPublicas()
    {
        //$normatividad = DB::table('tblnormatividad')->get();
        //protected $table = "Normartividad";
        $normatividad = Normatividad::all();
        return view('normatividad.convocatorias-publicas', ['normatividad' => $normatividad]);
    }
}
