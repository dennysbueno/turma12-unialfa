@extends('app')
@section('title','Detalhes do estudante')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-header">
        <strong>Dados do Alunoª</strong>
    </div>
    <div class="card-body">
        <p><strong>Nome: </strong>{{$estudante->nome}}</p>
        <p><strong>CPF: </strong>{{ $estudante->cpf }}</p>
        <p><strong>Data de Nascimento: </strong>{{ date('d/m/Y', strtotime($estudante->nascimento)) }}</p>
        <br>
        <a href="{{route('estudantes.index')}}" class="btn btn-success">Voltar para Página Inicial</a>
    </div>
</div>

@endsection
