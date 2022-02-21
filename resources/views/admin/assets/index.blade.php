@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Activos</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">activos</li>
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
                                <th>Tipo</th>
                                <th>Valor</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assets as $asset)
                                <tr>
                                    <td>{{ $asset->id }}</td>
                                    <td>{{ $asset->client->name }}</td>
                                    <td>{{ $asset->type }}</td>
                                    <td>{{ $asset->value }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#assetShow{{ $asset->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.assets.show')
                                            @can('assets.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#assetEdit{{ $asset->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.assets.edit')
                                            @endcan
                                            @can('assets.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#assetDelete{{ $asset->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.assets.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $assets->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
