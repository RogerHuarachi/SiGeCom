@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Croquis de Domicilio</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">domicilio</li>
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
                                <th>Direción</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($residences as $residence)
                                <tr>
                                    <td>{{ $residence->id }}</td>
                                    <td>{{ $residence->client->lastName }} {{ $residence->client->name }}</td>
                                    <td>{{ $residence->direction }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#residenceShow{{ $residence->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.residences.show')
                                            @can('residences.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#residenceEdit{{ $residence->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.residences.edit')
                                            @endcan
                                            @can('residences.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#residenceDelete{{ $residence->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.residences.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $residences->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
