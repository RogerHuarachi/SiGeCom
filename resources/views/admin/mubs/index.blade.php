@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">MUB</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">mub</li>
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
                                <th>Detalle</th>
                                <th>Compra Mensual</th>
                                <th>Venta Mensual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mubs as $mub)
                                <tr>
                                    <td>{{ $mub->id }}</td>
                                    <td>{{ $mub->client->name }}</td>
                                    <td>{{ $mub->buysMonth }}</td>
                                    <td>{{ $mub->saleMonth }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#mubShow{{ $mub->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.mubs.show')
                                            @can('mubs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#mubEdit{{ $mub->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.mubs.edit')
                                            @endcan
                                            @can('mubs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#mubDelete{{ $mub->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.mubs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $mubs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
