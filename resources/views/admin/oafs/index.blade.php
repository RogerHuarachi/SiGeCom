@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Otros Activos de la Familia</h1>
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
                            @foreach ($oafs as $oaf)
                                <tr>
                                    <td>{{ $oaf->id }}</td>
                                    <td>{{ $oaf->client->name }}</td>
                                    <td>{{ $oaf->item }}</td>
                                    <td>{{ $oaf->value }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('oafs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#oafEdit{{ $oaf->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.oafs.edit')
                                            @endcan
                                            @can('oafs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#oafDelete{{ $oaf->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.oafs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $oafs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
