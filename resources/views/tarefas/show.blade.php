@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{ $tarefa->titulo }}</h3>
        </div>
        <div class="card-body">
            <p>{{ $tarefa->descricao }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('tarefas.index') }}" class="btn btn-primary">Voltar à lista</a>
        </div>
    </div>
@endsection

