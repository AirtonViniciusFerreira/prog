@extends('layout.master')

@section('title','Login')

@section('content')
<form class="form-signin" method="post" action="/authenticate">
  @csrf
  <img class="mb-4" src="image/logoP.jpg" alt="" width="100" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Por Favor, faça o login</h1>
  <div class="form-group">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="email" name='email' class="form-control" placeholder="Email" required autofocus>
    @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="password" name='password' class="form-control" placeholder="Senha" required>
    @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  {{-- @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
  @endif --}}
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Lembre de mim
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <a href="/register" class="btn btn-lg btn-danger btn-block">Cadatrar-se</a>
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>
@endsection