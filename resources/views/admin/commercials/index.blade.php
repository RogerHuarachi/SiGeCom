@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Ref. Comercial</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">comercial</li>
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
                            @foreach ($commercials as $commercial)
                                <tr>
                                    <td>{{ $commercial->id }}</td>
                                    <td>{{ $commercial->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#commercialShow{{ $commercial->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.commercials.show')
                                            @can('commercials.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#commercialEdit{{ $commercial->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.commercials.edit')
                                            @endcan
                                            @can('commercials.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#commercialDelete{{ $commercial->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.commercials.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $commercials->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
