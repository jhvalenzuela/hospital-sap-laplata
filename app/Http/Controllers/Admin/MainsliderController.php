<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mainslider;
use Illuminate\Support\Facades\Storage;

class MainsliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainsliders = Mainslider::all();
        return view('admin.mainsliders.index', compact('mainsliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mainsliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        $request->validate([
             'slideTitulo' => 'required',
             'slideDescription' => 'required',
             'slideImagen' => 'required | image',
        ]);

        //$mainslider = Mainslider::create($request->all());
        $imagenes = $request->file('slideImagen')->store('public/sliders');
        //$url = Storage::put('public/sliders', $request->file('slideImagen'));

        $url = Storage::url($imagenes);

         $mainslider = Mainslider::create([
            'slideTitulo' => $request->input('slideTitulo'),
            'slideDescription' => $request->input('slideDescription'),
            'slideImagen' => $url
        ]);

        return redirect()->route('admin.mainsliders.index', $mainslider)->with('info', 'El deslizador se creo con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mainslider $mainslider)
    {
        return view('admin.mainsliders.show', compact('mainslider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mainslider $mainslider)
    {
        return view('admin.mainsliders.edit', compact('mainslider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mainslider $mainslider)
    {
        $request->validate([
             'slideTitulo' => 'required',
             'slideDescription' => 'required',
             'slideImagen' => 'required | image',
        ]);

        $mainslider->update($request->all());

        return redirect()->route('admin.mainsliders.index', $mainslider)->with('info', 'El deslizador se actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mainslider $mainslider)
    {
        $mainslider->delete();

        return redirect()->route('admin.mainsliders.index', $mainslider)->with('info', 'El deslizador se eliminó con éxito');

    }
}
