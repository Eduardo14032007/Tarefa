@extends('layouts.app')

@section('content')
    <h1>Editar Tarefa</h1>
    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="{{ $tarefa->titulo }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" class="form-control">{{ $tarefa->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Atualizar</button>
    </form>
@endsection

