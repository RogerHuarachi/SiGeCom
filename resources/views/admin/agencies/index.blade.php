@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Agencias</h1>
        @can('agencies.store')
            <ol class="breadcrumb float-sm-right pl-1">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#agencyCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
        @endcan
    </div>
    @include('admin.agencies.create')
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">agencias</li>
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
                            @foreach ($agencies as $agency)
                                <tr>
                                    <td>{{ $agency->id }}</td>
                                    <td>{{ $agency->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#agencyShow{{ $agency->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.agencies.show')
                                            @can('agencies.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#agencyEdit{{ $agency->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.agencies.edit')
                                            @endcan
                                            @can('agencies.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#agencyDelete{{ $agency->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.agencies.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $agencies->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
