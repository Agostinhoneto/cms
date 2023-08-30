<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        // Criação da página
        // Redirecionamento para a lista de páginas
    }

    public function show($id)
    {
        $page = Page::findOrFail($id);
        return view('pages.show', compact('page'));
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados
        // Atualização da página
        // Redirecionamento para a página atualizada
    }

    public function destroy($id)
    {
        // Localizar e excluir a página
        // Redirecionamento para a lista de páginas
    }
}
