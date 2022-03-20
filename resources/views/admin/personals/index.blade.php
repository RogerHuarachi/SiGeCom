@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Ref. Personal</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">personal</li>
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
                            @foreach ($personals as $personal)
                                <tr>
                                    <td>{{ $personal->id }}</td>
                                    <td>{{ $personal->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#personalShow{{ $personal->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.personals.show')
                                            @can('personals.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#personalEdit{{ $personal->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.personals.edit')
                                            @endcan
                                            @can('personals.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#personalDelete{{ $personal->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.personals.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $personals->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
