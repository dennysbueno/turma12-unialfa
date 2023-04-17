@extends('app')
@section('title', 'Lista de Produtos')
@section('content')
<h1>Lista de Produtos</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
        <tr>
            <th scope="row">{{ $produto->id }}</th>
            <th scope="row">
                <a href="{{ route('produtos.show', $produto) }}">
                    {{$produto->nome}}
                </a>
            </th>
            <th scope="row">{{ $produto->valor}}</th>
            <th>
                <a class="btn btn-primary" href="{{ route('produtos.edit', $produto) }}">
                    Editar
                </a>
                <form action="{{ route('produtos.destroy', $produto) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Apagar</button>
                </form>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-success" href="{{ route('produtos.create') }}">
    Novo Produto
</a>
@endsection
