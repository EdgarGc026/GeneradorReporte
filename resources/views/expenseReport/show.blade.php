@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col mb-3">
        <h1>Report: {{$report->title}}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-secondary mb-3" href="/expense_reports/">Back</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <a class="btn btn-primary mb-3" href="/expense_reports/{{$report->id}}/confirmSendMail">Send Email</a>
    </div>
</div>

<div class="row">
   <div class="col">
       <h3>Details</h3>
       <table class="table">
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
        <a class="btn btn-primary" href="/expense_reports/{{$report->id}}/expenses/create">New expense</a>
    </div>
</div>
</div>
@endsection
