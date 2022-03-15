@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Activos Fijos del Negocio</h1>
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
                                <th>Valor</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($afns as $afn)
                                <tr>
                                    <td>{{ $afn->id }}</td>
                                    <td>{{ $afn->client->name }}</td>
                                    <td>{{ $afn->item }}</td>
                                    <td>{{ $afn->value }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('afns.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#afnEdit{{ $afn->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.afns.edit')
                                            @endcan
                                            @can('afns.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#afnDelete{{ $afn->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.afns.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $afns->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
