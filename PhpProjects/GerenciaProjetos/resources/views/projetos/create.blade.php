
@extends('layouts.app')

@section('content')
    <h1>Criar Novo Projeto</h1>

    <form action="{{ route('projetos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nomeProjeto">Nome do Projeto:</label>
            <input type="text" name="nomeProjeto" class="form-control" value="{{ old('nomeProjeto') }}" required>
        </div>

        <div class="form-group">
            <label for="descricaoProjeto">Descrição do Projeto:</label>
            <input type="text" name="descricaoProjeto" class="form-control" value="{{ old('descricaoProjeto') }}" required>
        </div>

        <div class="form-group">
            <label for="terminoProjeto">Data de Termino do Projeto:</label>
            <input type="date" name="terminoProjeto" class="form-control" value="{{ old('terminoProjeto') }}">
        </div>

        <div class="form-group">
            <label for="responsaveisProjeto">Responsáveis:</label>
            <input type="text" name="responsaveisProjeto" class="form-control" value="{{ old('responsaveisProjeto') }}" required>
        </div>

           <!-- Campo oculto para armazenar o ID da equipe -->
           <input type="hidden" name="equipeProjetoFk" value="{{ isset($equipe) ? $equipe->id : '' }}">


        <button type="submit" class="btn btn-primary">Salvar </button>
    </form>
@endsection
