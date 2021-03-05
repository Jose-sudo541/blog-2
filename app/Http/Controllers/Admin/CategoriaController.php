<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
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
        $categorias = Categoria::create($request->all());
        $categorias->save();
        $categorias = Categoria::all();
        $request->session()->flash('info-create','Categoria Creada');
        return redirect('admin/categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categorium)
    {
        return view('admin.categorias.show', compact('categorium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categorium)
    {
        return view('admin.categorias.edit', compact('categorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categorium)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>"required|unique:categorias,slug,$categorium->id"
        ]);
        $categorium->update($request->all());
        $categorium->save();
        $categorium = Categoria::all();
        $categorias = $categorium;
        $request->session()->flash('info-update','Categoria Actualizada');
        return redirect('admin/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Categoria $categorium)
    {
        $categorias = Categoria::find($categorium->id);
        $categorias->delete();
        $request->session()->flash('info-drop','Categoria Borrada');
        return redirect('admin/categoria');
    }
}
