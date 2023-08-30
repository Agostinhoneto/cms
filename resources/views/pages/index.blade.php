@extends('layouts.app')

@section('content')
    <h1>Lista de Páginas</h1>
    <a href="{{ route('pages.create') }}" class="btn btn-primary">Nova Página</a>

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->title }}</td>
                    <td>
                        <a href="{{ route('pages.show', $page->id) }}" class="btn btn-info">Visualizar</a>
                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning">Editar</a>
                        <!-- Adicione um formulário para excluir a página aqui -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
