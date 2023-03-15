@extends('app')
@section('title', 'Lista de Clientes')
@section('content')
    <h1>Lista de Clientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <th scope="row">{{ $client->id}}</th>
                <th scope="row">
                    <a href="{{ route('clients.show', $client) }}">
                        {{$client->nome}}
                    </a>
                </th>
                <th scope="row">{{ $client->endereco}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success" href="{{ route('clients.create') }}">
        Novo Cliente
    </a>
@endsection
