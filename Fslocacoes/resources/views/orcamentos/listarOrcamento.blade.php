@extends('layout.master')

@section('title', 'Materias')

@section('content')
<div class="row">
        <div class=" col-12 text-right" style="margin-bottom: 15px;">
                <a href="/orcamento/novo" class="btn btn-primary">Adicionar</a>
        </div>

    </div>
    <div class="container">
    <h1 class="jumbotron-heading">Orçamentos</h1>
    </div>
    <table class="table table-striped table-sm">
        <thead>
            <th>id</th>
            <th>Local</th>
            <th>Data do Evento</th>

            <th>ações</th>
        </thead>
        <tbody>
            @foreach ($orcamento as $orcamento)
            <tr>
                <td>{{$orcamento->id}}</td>
                <td>{{$orcamento->place}}</td>
                <td>{{$orcamento->date_event}}</td>
                <td>
                    <a class="btn btn-sm btn-secondary" href="#">Alterar</a>
                    <a class="btn btn-sm btn-info" href="#">Visualizar</a>
                        <a class="btn btn-sm btn-danger" href="/orcamento/remover/{{$orcamento->id}}">Remover</a>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection