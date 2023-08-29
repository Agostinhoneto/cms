<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use App\Post as AppPost;

class PostController extends Controller
{
    public function index()
    {        
        $posts = Post::all();
        return view("posts.index", compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Criar um novo post com os dados validados
        $post = new Post;
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->save();

        // Redirecionar para a página de exibição do post recém-criado
        return redirect('/posts/' . $post->id);
    }
}
