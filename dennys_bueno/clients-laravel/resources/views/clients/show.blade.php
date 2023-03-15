@extends('app')
@section('title', 'Detalhes de Cliente')
@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes do Cliente {{ $client->name }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong>{{$client->id}}</p>
            <p><strong>Nome:</strong>{{$client->nome}}</p>
            <p><strong>Endereço:</strong>{{$client->endereco}}</p>
            <p><strong>Observação:</strong>{{$client->observacao}}</p>
            <br>
            <a href="{{ route('clients.index') }}" class="btn btn-success">
                Voltar para a lista de Clientes
            </a>
        </div>
    </div>
@endsection
