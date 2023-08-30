@extends('layouts.app')

@section('content')
    <h1>Editar Página</h1>

    <form action="{{ route('pages.update', $page->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $page->title }}">
        </div>
        <div class="form-group">
            <label for="content">Conteúdo</label>
            <textarea name="content" id="content" class="form-control">{{ $page->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
