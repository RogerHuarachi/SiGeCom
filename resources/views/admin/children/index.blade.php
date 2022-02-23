@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Hijos</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">hijos</li>
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
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($children as $child)
                                <tr>
                                    <td>{{ $child->id }}</td>
                                    <td>{{ $child->client->name }}</td>
                                    <td>{{ $child->age }}</td>
                                    <td>{{ $child->gender }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#childShow{{ $child->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.children.show')
                                            @can('children.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#childEdit{{ $child->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.children.edit')
                                            @endcan
                                            @can('children.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#childDelete{{ $child->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.children.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $children->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
