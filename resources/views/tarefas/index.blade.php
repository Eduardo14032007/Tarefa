@extends('layouts.app')

@section('content')
    <h1>Lista de Tarefas</h1>
    <a href="{{ route('tarefas.create') }}" class="btn btn-primary mb-3">Adicionar Nova Tarefa</a>
    <div class="row">
        @foreach($tarefas as $tarefa)
            <div class="col-md-4">
                <div class="card task-card">
                    <div class="card-header">
                        <h5>{{ $tarefa->titulo }}</h5>
                    </div>
                    <div class="card-body">
                        <p>{{ $tarefa->descricao }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
