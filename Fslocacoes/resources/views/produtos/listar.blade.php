@extends('layout.master')

@section('title', 'Materias')

@section('content')
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Materiais</h1>
      <p class="lead text-muted">Estes são os Materiais disponiveis para o Alguel em nossa loja.</p>
      <p>
        <a href="/register" class="btn btn-primary my-2">Cadraste-se</a>
        <a href="#" class="btn btn-secondary my-2">Faça já seu Orçamento</a>
      </p>
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
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                  <!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
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