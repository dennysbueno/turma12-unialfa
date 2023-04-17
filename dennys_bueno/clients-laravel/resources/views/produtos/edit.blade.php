@extends('app')
@section('title', 'Cadastro de Produto')
@section('content')
    <h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $produto->nome }}">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" value="{{ $produto->valor }}">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" cols="30" rows="10">{{ $produto->descricao }}</textarea>
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection
