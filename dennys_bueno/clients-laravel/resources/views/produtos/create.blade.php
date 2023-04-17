@extends('app')
@section('title', 'Cadastro de Produto')
@section('content')
    <h1>Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection
