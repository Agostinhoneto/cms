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
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        Contato::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contato criado com sucesso.');
    }

    public function show($id)
    {
        $contact = Contato::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contato::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contato::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contato atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $contact = Contato::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contato excluído com sucesso.');
    }

}
