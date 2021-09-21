<?php

namespace App\Http\Controllers;
use App\Models\Citas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CitasController extends Controller
{
    
    public function create(Request $request)
    {
        $request->validate([
        'citNombres' => ['required', 'min:4'],
        'citApellidos' => 'required',
        'citTipoDocumento' => 'required',
        'citNumDocumento' => 'required',
        'citResidencia' => 'required',
        'citDireccion' => 'required',
        'citTelefono' => 'required',
        'citEmail' => 'required',
        'citEPS' => 'required',
        'citEstrato' => 'required',
        'citEspecialidad' => 'required',
        'citMensaje' => 'required',
    ]);

    Citas::create([
        'citNombres' => $request->input('citNombres'),
        'citApellidos' => $request->input('citApellidos'),
        'citTipoDocumento' => $request->input('citTipoDocumento'),
        'citNumDocumento' => $request->input('citNumDocumento'),
        'citFecNacimiento' => $request->input('citFecNacimiento'),
        'citResidencia' => $request->input('citResidencia'),
        'citDireccion' => $request->input('citDireccion'),
        'citTelefono' => $request->input('citTelefono'),
        'citEmail' => $request->input('citEmail'),
        'citEPS' => $request->input('citEPS'),
        'citEstrato' => $request->input('citEstrato'),
        'citEspecialidad' => $request->input('citEspecialidad'),
        'citMensaje' => $request->input('citMensaje'),
    ]);
    return redirect()->route('citas.create');
    // return view('informacion.citas');
    
    }
}
