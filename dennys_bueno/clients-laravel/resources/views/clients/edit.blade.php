@extends('app')
@section('title', 'Editar Cliente')
@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $client->nome }}" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" value="{{ $client->endereco }}" required>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" cols="30" rows="10" required>{{ $client->observacao }}</textarea>
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>

@endsection
