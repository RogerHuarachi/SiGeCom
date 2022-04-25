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
                                <th>Empresa</th>
                                <th>Cargo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dges as $dge)
                                <tr>
                                    <td>{{ $dge->id }}</td>
                                    <td>{{ $dge->client->name }}</td>
                                    <td>{{ $dge->business }}</td>
                                    <td>{{ $dge->position }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#dgeShow{{ $dge->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.dges.show')
                                            @can('dges.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#dgeEdit{{ $dge->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.dges.edit')
                                            @endcan
                                            @can('dges.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#dgeDelete{{ $dge->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.dges.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $dges->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
