@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">CAEDEC</h1>
        @can('caedecs.store')
            <ol class="breadcrumb float-sm-right pl-1">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#caedecCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
        @endcan
    </div>
    @include('admin.caedecs.create')
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">caedec</li>
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
                                <th>Id</th>
                                <th>Código</th>
                                <th>Descripción</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($caedecs as $caedec)
                                <tr>
                                    <td>{{ $caedec->id }}</td>
                                    <td>{{ $caedec->code }}</td>
                                    <td>{{ $caedec->description }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#caedecShow{{ $caedec->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.caedecs.show')
                                            @can('caedecs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#caedecEdit{{ $caedec->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.caedecs.edit')
                                            @endcan
                                            @can('caedecs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#caedecDelete{{ $caedec->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.caedecs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $caedecs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
