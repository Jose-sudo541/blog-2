<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etiquetas = Etiqueta::paginate(10);
        return view('admin.etiquetas.index', compact('etiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etiquetas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>'required|unique:categorias'
        ]);
        $etiquetas = Etiqueta::create($request->all());
        $etiquetas->save();
        $etiquetas = Etiqueta::all();
        $request->session()->flash('info-create','Etiqueta Creada');
        return redirect('admin/etiquetas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Etiqueta $etiqueta)
    {
        return view('admin.etiquetas.show', compact('etiqueta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Etiqueta $etiqueta)
    {
        return view('admin.etiquetas.edit', compact('etiqueta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etiqueta $etiqueta)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>"required|unique:categorias,slug,$etiqueta->id"
        ]);
        $etiqueta->update($request->all());
        $etiqueta->save();
        $etiqueta = Etiqueta::all();
        $etiquetas = $etiqueta;
        $request->session()->flash('info-update','Etiqueta Actualizada');
        return redirect('admin/etiquetas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Etiqueta $etiqueta)
    {
        $etiquetas = Etiqueta::find($etiqueta->id);
        $etiquetas->delete();
        $request->session()->flash('info-drop','Etiqueta Borrada');
        return redirect('admin/etiquetas');
    }
}
