@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="mt-3">Enviando reporte por correo electronico</h1>
    </div>
</div>
<div class="col">
    <div class="row mt-3">
        <a class="btn btn-secondary" href="/expense_reports/">Back</a>
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
        <form action="/expense_reports/{{ $report->id}}/sendMail" method="POST">
        @csrf
            <div class="form-group mt-3">
                <label for="email">Correo electronico:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa el corrreo"  value="{{ old('email') }}">
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection
