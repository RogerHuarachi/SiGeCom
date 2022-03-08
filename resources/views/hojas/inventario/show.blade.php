@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Solicitud de Préstamo</h1>
    </div>
@endsection
@section('content')
@include('admin.inventories.sub.primary')
@include('admin.inventories.sub.secondary')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Inventario Actividad Primaria
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#inventoryPrimCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->actprimary())
                <div class="card-body">
                    <div class="row">
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
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total Activos</th>
                                    <th>{{ $client->actprimary()->sum('share') }}</th>
                                    <th>{{ $client->actprimary()->sum('balace') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Inventario Actividad Secundaria
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#inventorySecCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->actsecondary())
                <div class="card-body">
                    <div class="row">
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
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total Activos</th>
                                    <th>{{ $client->actsecondary()->sum('share') }}</th>
                                    <th>{{ $client->actsecondary()->sum('balace') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
