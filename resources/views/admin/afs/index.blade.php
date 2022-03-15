@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Activos de la Familia</h1>
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
                            @foreach ($afs as $af)
                                <tr>
                                    <td>{{ $af->id }}</td>
                                    <td>{{ $af->client->name }}</td>
                                    <td>{{ $af->item }}</td>
                                    <td>{{ $af->value }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('afs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#afEdit{{ $af->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.afs.edit')
                                            @endcan
                                            @can('afs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#afDelete{{ $af->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.afs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $afs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
