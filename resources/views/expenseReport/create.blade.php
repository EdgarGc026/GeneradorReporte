@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
    <div class="col">
        <h1>Nuevo Reporte</h1>
    </div>
</div>
<div class="col">
    <div class="row">
        <a class="btn btn-secondary" href="/expense_reports/">Regresar</a>
    </div>
</div>

<div class="row">
    <div class="col">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/expense_reports" method="POST">
        @csrf
            <div class="form-group mt-3">
                <label class="">Titulo del reporte:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Escribe el titulo"  value="{{ old('title') }}">
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</div>
</div>
@endsection
