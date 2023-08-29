@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Novo Post</h1>
        <form method="post" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Conteúdo</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
