@extends('app')
@section('title', 'Editar Estudante')

@section('content')
    <form action="{{ route('estudantes.update', $estudante) }}" method="POST">
         @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{ $estudante->nome }}"
                class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF"
                value="{{ $estudante->cpf }}" class="form-control" required>
        </div>
        <div class="mb-3">
           <label for="nascimento">Data de Nascimento:</label>
           <input type="date" name="nascimento" id="nascimento" placeholder="Preencha sua data de nascimento" value="{{ $estudante->nascimento }}" required>
        </div>
         <div class="mb-3">
            <label for="sala_id" class="form-label">Número da Sala</label>
           <input type="sala_id" name="sala_id" id="sala_id" placeholder="Numero da Sala" value="{{ $estudante->sala_id }}" required>

        </div>

        <button class="btn btn-success mb-3" type="submit"> Alterar </button>
        <a class="btn btn-secondary mb-3" href="{{ route('estudantes.index') }}">Voltar</a>
    </form>
@endsection
