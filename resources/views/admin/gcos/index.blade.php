@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Datos Generales de la Empresa</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">Datos</li>
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
                                <th>Monto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gcos as $gco)
                                <tr>
                                    <td>{{ $gco->id }}</td>
                                    <td>{{ $gco->client->name }}</td>
                                    <td>{{ $gco->item }}</td>
                                    <td>{{ $gco->money }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('gcos.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#gcoEdit{{ $gco->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.gcos.edit')
                                            @endcan
                                            @can('gcos.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gcoDelete{{ $gco->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.gcos.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $gcos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
