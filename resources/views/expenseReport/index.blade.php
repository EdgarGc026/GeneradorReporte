@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col">
        <h1>Reportes del usuario {{ $user->name }}</h1>
    </div>
</div>
<div class="col">
    <div class="row">
        <a class="btn btn-primary mb-3" href="/expense_reports/create">Crear un nuevo reporte</a>
    </div>
</div>

<div class="row">
    <div class="col mt-4">
    <table class="table">
        <h3>Tus reportes creados</h3>
        @foreach($expenseReports as $expenseReport)
            <tr>
                <!-- <td>{{$expenseReport->title}}</td> -->
                <td><a  href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a></td>
                <td><a class="btn btn-success" href="/expense_reports/{{ $expenseReport->id }}/edit">Editar</a></td>
                <td><a class="btn btn-danger" href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Eliminar</a></td>

            </tr>
        @endforeach
        </table>
    </div>
</div>
</div>

@endsection
