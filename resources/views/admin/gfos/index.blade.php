@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Detalle de Gastos Fijos Operativos</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">gastos</li>
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
                                <th>Item</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gfos as $gfo)
                                <tr>
                                    <td>{{ $gfo->id }}</td>
                                    <td>{{ $gfo->client->name }}</td>
                                    <td>{{ $gfo->item }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#gfoShow{{ $gfo->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.gfos.show')
                                            @can('gfos.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#gfoEdit{{ $gfo->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.gfos.edit')
                                            @endcan
                                            @can('gfos.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gfoDelete{{ $gfo->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.gfos.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $gfos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
