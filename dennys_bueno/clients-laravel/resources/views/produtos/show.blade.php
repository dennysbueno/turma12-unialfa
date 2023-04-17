@extends('app')
@section('title', 'Detalhes de Produto')
@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes do Produdo {{ $produto->name }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong>{{$produto->id}}</p>
            <p><strong>Nome:</strong>{{$produto->nome}}</p>
            <p><strong>Valor:</strong>{{$produto->valor}}</p>
            <br>
            <a href="{{ route('produtos.index') }}" class="btn btn-success">
                Voltar para a lista de Produtos
            </a>
        </div>
    </div>
@endsection
