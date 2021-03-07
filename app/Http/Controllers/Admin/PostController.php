<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Categoria;
use App\Models\Etiqueta;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->latest('id')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('nombre', 'id');
        $etiquetas = Etiqueta::all();
        return view('admin.posts.create', compact('categorias','etiquetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        
        $posts = Post::create($request->all());
        $url = Storage::put('', $request->file('file'));
        $posts->image()->create([
            'url' => $url
        ]);
        $posts->save();

        if ($request->etiquetas) {
            $posts->etiquetas()->sync($request->etiquetas);
        }
        
        $request->session()->flash('info-create','Post Creado');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categorias = Categoria::pluck('nombre', 'id');
        $etiquetas = Etiqueta::all();
        return view('admin.posts.edit', compact('post','categorias','etiquetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->all());
        // $url = Storage::put('', $request->file('file'));

        if ($request->file('file')) {
            $url = Storage::put('',$request->file('file'));
            if ($post->image) {
                Storage::delete($post->image->url);

                $post->image->update([
                    'url' => $url
                ]);
            }else{
                $post->image()->create([
                    'url' => $url
                ]);
                // $post->save();
            }
        }
        $post->save();
        $request->session()->flash('info-create','Post Actializado');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post)
    {
        $categorias = Post::find($post->id);
        $categorias->delete();
        $request->session()->flash('info-drop','Categoria Borrada');
        return redirect('admin/posts');
    }
}
