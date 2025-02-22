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
                <td scope="row">{{ $client->id}}</td>
                <td scope="row">
                    <a href="{{ route('clients.show', $client) }}">
                        {{$client->nome}}
                    </a>
                </td>
                <td scope="row">{{ $client->endereco}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">
                        Editar
                    </a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success" href="{{ route('clients.create') }}">
        Novo Cliente
    </a>
@endsection
