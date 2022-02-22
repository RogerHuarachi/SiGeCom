@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Insumos</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">insumo</li>
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
                                <th>Insumo</th>
                                <th>Total</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->product->client->name }}</td>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->total }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#itemShow{{ $item->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.items.show')
                                            @can('items.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#itemEdit{{ $item->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.items.edit')
                                            @endcan
                                            @can('items.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#itemDelete{{ $item->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.items.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
