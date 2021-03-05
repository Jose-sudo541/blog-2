<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use Illuminate\Http\Request;
class BlogControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $posts = Post::where('estado', 2)->get();
        $categorias = Categoria::paginate(6);
        return view('home', compact('categorias', 'posts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $categorias = Categoria::take(3)->get();
        $secondCa = Categoria::all();
        $posts = Post::where('estado', 2)
            ->paginate(4);
        return view('blog.lista', compact('categorias', 'posts', 'secondCa'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post(Post $post)
    {
        $categorias = Categoria::where('id', '!=', $post->id)->take(3)->get();
        $masPosts = Post::where('id', '!=', $post->id)->take(3)->get();
        return view('blog.post', compact('post', 'categorias', 'masPosts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaCategoria(Categoria $categoria)
    {
        $categorias = Categoria::take(3)->get();
        $secondCa = $categoria;
        $post = Post::all();
        $postsCa = Post::where('categoria_id', $categoria->id)
            ->where('estado', 2)
            ->paginate(6);

        return view('blog.listacategoria', compact('post','postsCa', 'categorias', 'secondCa'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
