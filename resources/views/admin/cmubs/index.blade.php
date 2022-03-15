@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Aclaración MUB</h1>
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
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cmubs as $cmub)
                                <tr>
                                    <td>{{ $cmub->id }}</td>
                                    <td>{{ $cmub->client->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#cmubShow{{ $cmub->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.cmubs.show')
                                            @can('cmubs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cmubEdit{{ $cmub->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.cmubs.edit')
                                            @endcan
                                            @can('cmubs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#cmubDelete{{ $cmub->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.cmubs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $cmubs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
