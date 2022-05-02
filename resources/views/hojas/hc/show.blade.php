@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Hoja de Costo</h1>
    </div>
@endsection
    @section('content')
    @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
        @include('admin.products.create')
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Productos
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#productCreate">
                                <i class="fas fa-plus"></i>
                            </button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body p-2">
                    @if ($client->products)
                        @foreach ($client->products as $product)
                            <div class="row">
                                <h6 class="p-1">Unidad de Produccion: {{ $product->unit }}</h6>
                            </div>
                            <div class="row">
                                <h6 class="p-1">Rendimiento: {{ $product->performance }}</h6>
                            </div>
                            <div class="card">
                                <div class="card-header bg-info p-2">
                                    <h3 class="card-title">
                                        Insumos de {{ $product->name }}
                                        <br>
                                        Unidad de Produccion: {{ $product->unit }}
                                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#itemCreate{{ $product->id }}">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                            @include('admin.items.create')
                                        @endif
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-2">
                                    <div class="row">
                                        <table class="table table-sm table-light">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Cantidad</th>
                                                    <th>Unidad</th>
                                                    <th>Rendimiento</th>
                                                    <th>Precio U</th>
                                                    <th>Total</th>
                                                    @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                        <th>Opc</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($product->items as $item)
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->amount }}</td>
                                                        <td>{{ $item->unit }}</td>
                                                        <td>{{ $item->performance }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->total }}</td>
                                                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                            <td>
                                                                <div class="btn-group">
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
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>{{ $product->items->sum('total') }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Costo por Unidad de venta</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>{{ $product->items->sum('total')/ $product->performance }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
