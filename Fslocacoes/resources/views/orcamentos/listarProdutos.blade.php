@extends('layout.master')

@section('title', 'Materias')

@section('content')
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Bem Vindo, {{auth()->user()->username}}</h1>
      <h1 class="jumbotron-heading">Materiais</h1>
      <p class="lead text-muted">Estes são os Materiais disponiveis para o Alguel em nossa loja.</p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
  <!--'name', 'amount', 'value', 'details', 'foto',-->

      <div class="row">
        @foreach ($produtos as $produto)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>{{$produto->name}}</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$produto->name}}</text></svg>
            <div class="card-body">
              <p class="card-text">{{$produto->name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="collapse" href="#description" role="button" aria-expanded="false" aria-controls="description">
                  Ver</button>
                  <div>
                  <input type="int">
                  <a type="button" class="btn btn-sm btn-outline-primary" href="/orcamento/produto/{{$produto->id}}">Adicionar</a>
                
                  </div>
                  </div>
                <div class="col">
                
                <small class="text-muted">Unidade: R${{$produto->value}}</small>
              </div>
              
            </div>
            <div class="collapse multi-collapse" id="description">
                    <div class="card card-body">
                      {{$produto->details}}
                    </div>
                  </div>
            </div>
          </div>
        </div>
        @endforeach     
      </div>
    </div>
  </div>
@endsection