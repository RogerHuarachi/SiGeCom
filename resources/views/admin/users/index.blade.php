@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Usuarios</h1>
        @can('users.store')
            <ol class="breadcrumb float-sm-right pl-1">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#userCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
        @endcan
    </div>
    @include('admin.users.create')
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">usuarios</li>
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
                                @can('users.update', 'users.destroy')
                                <th>Opciones</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#userShow{{ $user->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.users.show')
                                            @can('users.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#userEdit{{ $user->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.users.edit')
                                            @endcan
                                            @can('users.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#userDelete{{ $user->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.users.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
