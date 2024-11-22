@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card de boas-vindas -->
                <div class="card shadow-lg" style="background-color: #f8f9fa; border-radius: 10px;">
                    <div class="card-header text-center" style="background-color: #007bff; color: white; border-radius: 10px 10px 0 0;">
                        <h2>Bem-vindo ao Quadro de Tarefas</h2>
                    </div>
                    <div class="card-body text-center">
                        <p class="lead text-muted">Gerencie suas tarefas de forma simples e eficaz.</p>
                        <a href="{{ route('tarefas.index') }}" class="btn btn-primary btn-lg">Ver Tarefas</a>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Desenvolvido por Eduardo, o Lindo | Sistema de Gerenciamento de Tarefas</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Estilos adicionais -->
    <style>
        body {
            background-color: #f4f4f4;
        }

        .container {
            margin-top: 100px;
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .btn:hover {
            background-color: #0056b3;
            transition: background-color 0.3s ease-in-out;
        }

        .card-header h2 {
            font-family: 'Arial', sans-serif;
        }
    </style>
@endsection
