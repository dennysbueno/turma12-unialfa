@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
<form action="{{ route('series.store') }}" method="post">
    @csrf
    <div class="md-3">
        <label for="name" class="form-label">Nome</label>
        <input type="name" class="form-control" id="name" name="name" placeholder="Nome" required>
    </div>
    <button class="btn btn-primary mt-3" type="submit">Cadastrar</button>
</form>
@endsection
