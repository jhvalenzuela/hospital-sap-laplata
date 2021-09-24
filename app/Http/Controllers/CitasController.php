<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Citas;
use Illuminate\Http\Request;
//use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class CitasController extends Controller
{
    
    public function create(Request $request)
    {   //dd($request);
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
        // 'citAuthorization' => 'required',
    ]);

    $archivos = $request->file('citAuthorization')->store('public/authorizations');
        //$url = Storage::put('public/sliders', $request->file('slideImagen'));

    $url = Storage::url($archivos);

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
        'citAuthorization' => $url
    ]);
    
    return redirect()->route('citas.create')->with('info', 'La cita se  registro con éxito');
    // return view('informacion.citas');
    //return $request->all();
    }
}
