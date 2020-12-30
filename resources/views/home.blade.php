@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido {{ $user->name}}
                    <section>

                        <div class="container mt-3 ml-2">
                            <span>Generar el reporte de gastos 👉</span>
                            <a href="/expense_reports" class="btn btn-primary btn-sm">Expense Reports</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
