@extends('layout.master')

@section('title','Registrar-se')

@section('content')
    <form method="post" action="/register">
    @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}"/>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="name">Nome de Usuario</label>
        <input type="text" class="form-control" name="username" value="{{ old('username') }}"/>
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" value="{{ old('email') }}"/>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" value="{{ old('password') }}"/>
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

    <div>
        <input type="submit" class="btn btn-primary" value="Cadastrar-se"/>
        <a href="/login" class="btn btn-danger">Já tenho uma conta</a>
    </div>
    </form>
@endsection
