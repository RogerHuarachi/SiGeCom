@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Aclaración de Gastos</h1>
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
                            @foreach ($cdgs as $cdg)
                                <tr>
                                    <td>{{ $cdg->id }}</td>
                                    <td>{{ $cdg->client->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#cdgShow{{ $cdg->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.cdgs.show')
                                            @can('cdgs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cdgEdit{{ $cdg->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.cdgs.edit')
                                            @endcan
                                            @can('cdgs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#cdgDelete{{ $cdg->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.cdgs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $cdgs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
