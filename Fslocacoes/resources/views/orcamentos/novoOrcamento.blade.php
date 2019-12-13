@extends('layout.master')

@section('title', 'Novo Orçamento')

@section('content')
    <form method="post" action="/orcamento/novo">
        @csrf
        <div class="form-group">
            <label for="place">Local do Evento:</label>
            <input type="text" class="form-control" name="place" value="{{ old('place') }}"/>
            @error('place')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Endereço do Evento:</label>
            <input type="text" class="form-control" name="address" value="{{ old('address') }}"/>
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="date_event">Data do Evento</label>
            <input type="date" class="form-control" name="date_event" value="{{ old('date_event') }}"/>
            @error('date_event')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="delivery_date">Data de devolção</label>
            <input type="date" class="form-control" name="delivery_date" value="{{ old('delivery_date') }}"/>
            @error('delivery_date')
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
            <input type="submit" class="btn btn-primary" value="Confirmar"/>
            <a href="/orcamento" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection