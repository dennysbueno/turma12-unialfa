@extends('app')
@section('title', 'Adicionar Novo Estudante')
@section('content')

    <h1>Novo Estudante</h1>

    <form action="{{ route('estudantes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" class="form-control" required>
        </div>
        <div class="mb-3">
           <label for="nascimento">Data de Nascimento:</label>
           <input type="date" name="nascimento" id="nascimento" placeholder="Preencha sua data de nascimento" required>
        </div>
        <div class="mb-3">
           <label for="sala_id" class="form-label">Número da Sala</label>
           <input type="sala_id" name="sala_id" id="sala_id" placeholder="Numero da Sala" required>
        </div>

         <button class="btn btn-success mb-3" type="submit"> Cadastrar </button>
         <a class="btn btn-secondary mb-3" href="{{ route('estudantes.index') }}">Voltar</a>
    </form>

@endsection
