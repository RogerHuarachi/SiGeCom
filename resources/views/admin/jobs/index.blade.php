@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Croquis de Negocio</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">negocio</li>
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
                            @foreach ($jobs as $job)
                                <tr>
                                    <td>{{ $job->id }}</td>
                                    <td>{{ $job->client->lastName }} {{ $job->client->name }}</td>
                                    <td>{{ $job->direction }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#jobShow{{ $job->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.jobs.show')
                                            @can('jobs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#jobEdit{{ $job->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.jobs.edit')
                                            @endcan
                                            @can('jobs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#jobDelete{{ $job->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.jobs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $jobs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
