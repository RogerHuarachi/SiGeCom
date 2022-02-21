@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Bienes de Negocio</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">bienes</li>
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
                                <th>Descripcion</th>
                                <th>Valor</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($works as $work)
                                <tr>
                                    <td>{{ $work->id }}</td>
                                    <td>{{ $work->client->name }}</td>
                                    <td>{{ $work->type }}</td>
                                    <td>{{ $work->description }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#workShow{{ $work->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.works.show')
                                            @can('works.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#workEdit{{ $work->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.works.edit')
                                            @endcan
                                            @can('works.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#workDelete{{ $work->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.works.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $works->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
