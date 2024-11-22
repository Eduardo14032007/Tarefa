<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    // Listar tarefas
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    // Exibir formulário para criar tarefa
    public function create()
    {
        return view('tarefas.create');
    }

    // Salvar tarefa no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'nullable|string',
        ]);

        Tarefa::create($request->all());
        return redirect('/tarefas');
    }

    // Exibir formulário para editar tarefa
    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefas.edit', compact('tarefa'));
    }

    // Atualizar tarefa
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'nullable|string',
        ]);

        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($request->all());
        return redirect('/tarefas');
    }

    // Excluir tarefa
    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();
        return redirect('/tarefas');
    }
}