<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
        return view('contato.index', compact('contatos'));
    }

    public function create()
    {
        return view('contato.create');
    }

    public function store(Request $request)
    {
        Contato::create($request->all());
        return redirect()->route('contato.index')->with('success', 'Contato criado com sucesso.');
    }

    public function show($id)
    {
        $contact = Contato::findOrFail($id);
        return view('contato.show', compact('contato'));
    }

    public function edit($id)
    {
        $contato = Contato::findOrFail($id);
        return view('contato.edit', compact('contato'));
    }

    public function update(Request $request, $id)
    {
        $contato = Contato::findOrFail($id);
        $contato->update($request->all());
        return redirect()->route('contato.index')->with('success', 'Contato atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();
        return redirect()->route('contato.index')->with('success', 'Contato excluído com sucesso.');
    }

}
