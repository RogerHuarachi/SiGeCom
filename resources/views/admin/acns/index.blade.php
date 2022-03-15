@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Activo Corriente del Negocio</h1>
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
                            @foreach ($acns as $acn)
                                <tr>
                                    <td>{{ $acn->id }}</td>
                                    <td>{{ $acn->client->name }}</td>
                                    <td>{{ $acn->item }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('acns.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#acnEdit{{ $acn->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.acns.edit')
                                            @endcan
                                            @can('acns.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#acnDelete{{ $acn->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.acns.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $acns->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
