@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Gastos y Mantenimiento de Vehiculos</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">gastos</li>
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
                                <th>Item</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gmvs as $gmv)
                                <tr>
                                    <td>{{ $gmv->id }}</td>
                                    <td>{{ $gmv->client->name }}</td>
                                    <td>{{ $gmv->item }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#gmvShow{{ $gmv->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.gmvs.show')
                                            @can('gmvs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#gmvEdit{{ $gmv->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.gmvs.edit')
                                            @endcan
                                            @can('gmvs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gmvDelete{{ $gmv->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.gmvs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $gmvs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
