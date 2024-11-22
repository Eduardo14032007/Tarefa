@extends('layouts.app')

@section('content')
    <h1>Adicionar Nova Tarefa</h1>
    <form action="{{ route('tarefas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection
