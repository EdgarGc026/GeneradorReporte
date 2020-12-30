@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col mb-3">
        <h1>Reporte: {{$report->title}}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary mb-3 mr-2" href="/expense_reports/">Regresar</a>
        <a class="btn btn-primary mb-3 ml-2" href="/expense_reports/{{$report->id}}/confirmSendMail">Enviar por correo electronico</a>
    </div>
</div>

{{-- <div class="row">
    <div class="col">
        <a class="btn btn-primary mb-3" href="/expense_reports/{{$report->id}}/confirmSendMail">Enviar por correo electronico</a>
    </div>
</div> --}}

<div class="row">
   <div class="col">
       <h3 class="mb-3">Detallar los gastos</h3>
       <table class="table">
           <tr>
               <th>Nombre</th>
               <th>Fecha de creacion</th>
               <th>Monto MXN</th>
           </tr>
        @foreach($report->expenses as $expense)
        <tr>
            <td>{{$expense->description}}</td>
            <td>{{$expense->created_at}}</td>
            <td>{{$expense->amount}}</td>
        </tr>
        @endforeach
       </table>
   </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="/expense_reports/{{$report->id}}/expenses/create">Nuevo gasto</a>
    </div>
</div>
</div>
@endsection
