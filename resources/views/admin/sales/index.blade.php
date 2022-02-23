@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Comportamiento de ventas</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">ventas</li>
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
                                <th>Descripcion</th>
                                <th>Valor</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $sale)
                                <tr>
                                    <td>{{ $sale->id }}</td>
                                    <td>{{ $sale->client->name }}</td>
                                    <td>{{ $sale->type }}</td>
                                    <td>{{ $sale->item }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#saleShow{{ $sale->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.sales.show')
                                            @can('sales.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#saleEdit{{ $sale->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.sales.edit')
                                            @endcan
                                            @can('sales.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#saleDelete{{ $sale->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.sales.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $sales->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
