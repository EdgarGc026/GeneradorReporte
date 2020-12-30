@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col">
        <h1 class="mb-3">Nuevo Gasto para el Reporte </h1>
    </div>
</div>
<div class="col">
    <div class="row mb-3">
        <a class="btn btn-secondary " href="/expense_reports/{{$report->id}}">Regresar</a>
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
        <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
        @csrf
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Type a description"  value="{{ old('description') }}">
            </div>

            <div class="form-group mt-2">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Type a amount"  value="{{ old('amount') }}">
            </div>
            <button class="btn btn-primary mt-3" type="submit">Submit </button>
        </form>
    </div>
</div>
</div>
@endsection
