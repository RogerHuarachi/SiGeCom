@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Departamentos</h1>
        @can('cities.store')
            <ol class="breadcrumb float-sm-right pl-1">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cityCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
        @endcan
    </div>
    @include('admin.cities.create')
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">departamentos</li>
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
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cities as $city)
                                <tr>
                                    <td>{{ $city->id }}</td>
                                    <td>{{ $city->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#cityShow{{ $city->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.cities.show')
                                            @can('cities.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cityEdit{{ $city->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.cities.edit')
                                            @endcan
                                            @can('cities.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#cityDelete{{ $city->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.cities.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $cities->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
