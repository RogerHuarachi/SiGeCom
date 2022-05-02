@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Inventario</h1>
    </div>
@endsection
@section('content')
    @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
        @include('admin.inventories.sub.primary')
        @include('admin.inventories.sub.secondary')
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Inventario Actividad Primaria
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#inventoryPrimCreate">
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

                @if ($client->actprimary())
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-sm table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tipo de Producto</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Producto</th>
                                            <th>Precio de Compra</th>
                                            <th>Precio de Venta</th>
                                            <th>MB</th>
                                            <th>% Avance</th>
                                            <th>Valor Inventario MP</th>
                                            <th>Valor Inventario PP</th>
                                            <th>Valor Inventario PT</th>
                                            @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                <th>Opc</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($client->actprimary() as $inventory)
                                            <tr>
                                                <td>{{ $inventory->type }}</td>
                                                <td>{{ $inventory->amount }}</td>
                                                <td>{{ $inventory->unit }}</td>
                                                <td>{{ $inventory->name }}</td>
                                                <td>{{ $inventory->buys }}</td>
                                                <td>{{ $inventory->sale }}</td>
                                                <td>{{ $inventory->mb }}</td>
                                                <td>{{ $inventory->advance }}</td>
                                                <td>{{ $inventory->vimp }}</td>
                                                <td>{{ $inventory->vipp }}</td>
                                                <td>{{ $inventory->vipt }}</td>
                                                @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                    <td>
                                                        <div class="btn-group">
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
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ $client->actprimary()->sum('vimp') }}</th>
                                            <th>{{ $client->actprimary()->sum('vipp') }}</th>
                                            <th>{{ $client->actprimary()->sum('vipt') }}</th>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ $client->actprimary()->sum('vimp')+$client->actprimary()->sum('vipp')+$client->actprimary()->sum('vipt') }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Inventario Actividad Secundaria
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#inventorySecCreate">
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

                @if ($client->actsecondary())
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-sm table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tipo de Producto</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Producto</th>
                                            <th>Precio de Compra</th>
                                            <th>Precio de Venta</th>
                                            <th>MB</th>
                                            <th>% Avance</th>
                                            <th>Valor Inventario MP</th>
                                            <th>Valor Inventario PP</th>
                                            <th>Valor Inventario PT</th>
                                            @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                <th>Opc</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($client->actsecondary() as $inventory)
                                            <tr>
                                                <td>{{ $inventory->type }}</td>
                                                <td>{{ $inventory->amount }}</td>
                                                <td>{{ $inventory->unit }}</td>
                                                <td>{{ $inventory->name }}</td>
                                                <td>{{ $inventory->buys }}</td>
                                                <td>{{ $inventory->sale }}</td>
                                                <td>{{ $inventory->mb }}</td>
                                                <td>{{ $inventory->advance }}</td>
                                                <td>{{ $inventory->vimp }}</td>
                                                <td>{{ $inventory->vipp }}</td>
                                                <td>{{ $inventory->vipt }}</td>
                                                @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                    <td>
                                                        <div class="btn-group">
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
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ $client->actsecondary()->sum('vimp') }}</th>
                                            <th>{{ $client->actsecondary()->sum('vipp') }}</th>
                                            <th>{{ $client->actsecondary()->sum('vipt') }}</th>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ $client->actsecondary()->sum('vimp')+$client->actsecondary()->sum('vipp')+$client->actsecondary()->sum('vipt') }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
