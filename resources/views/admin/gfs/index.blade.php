@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Gastos Familiares</h1>
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
                            @foreach ($gfs as $gf)
                                <tr>
                                    <td>{{ $gf->id }}</td>
                                    <td>{{ $gf->client->name }}</td>
                                    <td>{{ $gf->item }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#gfShow{{ $gf->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.gfs.show')
                                            @can('gfs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#gfEdit{{ $gf->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.gfs.edit')
                                            @endcan
                                            @can('gfs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gfDelete{{ $gf->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.gfs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $gfs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
