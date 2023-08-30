@extends('layouts.app')

@section('content')
    <h1>Lista de Contato</h1>
    <a href="{{ route('contato.create') }}" class="btn btn-primary">Novo Contato</a>

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contatos as $contato)
                <tr>
                    <td>{{ $contato->title }}</td>
                    <td>
                        <a href="{{ route('contato.show', $contato->id) }}" class="btn btn-info">Visualizar</a>
                        <a href="{{ route('contato.edit', $contato->id) }}" class="btn btn-warning">Editar</a>
                        <!-- Adicione um formulário para excluir a página aqui -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
