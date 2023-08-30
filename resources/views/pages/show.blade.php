@extends('layouts.app')

@section('content')
    <h1>{{ $page->title }}</h1>
    <div>{!! $page->content !!}</div>
    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning">Editar</a>
    <!-- Adicione um formulário para excluir a página aqui -->
@endsection
