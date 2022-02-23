@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Comportamiento de Pago</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">pagos</li>
@endsection
@section('content')
    @include('option.confirmation')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Proeza</th>
                                <th>BIC</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->client->name }}</td>
                                    <td>{{ $payment->proeza }}</td>
                                    <td>{{ $payment->bic }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#paymentShow{{ $payment->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.payments.show')
                                            @can('payments.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#paymentEdit{{ $payment->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.payments.edit')
                                            @endcan
                                            @can('payments.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#paymentDelete{{ $payment->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.payments.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $payments->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
