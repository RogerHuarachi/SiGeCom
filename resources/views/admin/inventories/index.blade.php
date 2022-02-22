@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Inventarios</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">inventario</li>
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
                                <th>Client</th>
                                <th>Producto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $inventory)
                                <tr>
                                    <td>{{ $inventory->id }}</td>
                                    <td>{{ $inventory->client->name }}</td>
                                    <td>{{ $inventory->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#inventoryShow{{ $inventory->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.inventories.show')
                                            @can('inventories.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#inventoryEdit{{ $inventory->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.inventories.edit')
                                            @endcan
                                            @can('inventories.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#inventoryDelete{{ $inventory->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.inventories.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $inventories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
