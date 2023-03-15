@extends('app')
@section('title', 'Lista de Clientes')
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
                <th scope="row">{{ $produto->id}}</th>
                <th scope="row">
                    <a href="{{ route('produtos.show', $produtos) }}">
                        {{$produtos->nome}}
                    </a>
                </th>
                <th scope="row">{{ $produtos->valor}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
