@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Bienes de Familia</h1>
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
                                <th>Descripcion</th>
                                <th>Valor</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($families as $family)
                                <tr>
                                    <td>{{ $family->id }}</td>
                                    <td>{{ $family->client->name }}</td>
                                    <td>{{ $family->description }}</td>
                                    <td>{{ $family->value }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#familyShow{{ $family->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.families.show')
                                            @can('families.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#familyEdit{{ $family->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.families.edit')
                                            @endcan
                                            @can('families.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#familyDelete{{ $family->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.families.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $families->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
