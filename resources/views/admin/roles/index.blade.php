@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Roles</h1>
        @can('roles.store')
            <ol class="breadcrumb float-sm-right pl-1">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#roleCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
        @endcan
    </div>
    @include('admin.roles.create')
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">roles</li>
@endsection
@section('content')}
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
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#roleShow{{ $role->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.roles.show')
                                            @can('roles.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#roleEdit{{ $role->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.roles.edit')
                                            @endcan
                                            @can('roles.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#roleDelete{{ $role->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.roles.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
