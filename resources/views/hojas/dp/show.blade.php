@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Declaración Patrimonial</h1>
    </div>
@endsection
@section('content')
    @include('admin.assets.create')
    @include('admin.passives.create')
    <div class="row">
        <h5 class="p-1">Patrimonio Neto: {{ $client->assets->sum('value') - $client->passives->sum('balace') }}</h5>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Activos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#assetCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->assets)
                    <div class="card-body p-2">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Tipo de Bien</th>
                                        <th>En Garantia</th>
                                        <th>Valor</th>
                                        <th>Opc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->assets as $asset)
                                        <tr>
                                            <td>{{ $asset->type }}</td>
                                            <td>{{ $asset->warranty }}</td>
                                            <td>{{ $asset->value }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @can('assets.update')
                                                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#assetEdit{{ $asset->id }}"><i class="fas fa-pen"></i></button>
                                                        @include('admin.assets.edit')
                                                    @endcan
                                                    @can('assets.destroy')
                                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#assetDelete{{ $asset->id }}"><i class="fas fa-trash-alt"></i></button>
                                                        @include('admin.assets.delete')
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Activos</th>
                                        <th></th>
                                        <th>{{ $client->assets->sum('value') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Pasivos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#passiveCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->passives)
                    <div class="card-body p-2">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Tipo de Bien</th>
                                        <th>Cuota Mensual</th>
                                        <th>Saldo Deudor</th>
                                        <th>Estado</th>
                                        <th>Opc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->passives as $passive)
                                        <tr>
                                            <td>{{ $passive->creditor }}</td>
                                            <td>{{ $passive->share }}</td>
                                            <td>{{ $passive->balace }}</td>
                                            <td>{{ $passive->state }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @can('passives.update')
                                                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#passiveEdit{{ $passive->id }}"><i class="fas fa-pen"></i></button>
                                                        @include('admin.passives.edit')
                                                    @endcan
                                                    @can('passives.destroy')
                                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#passiveDelete{{ $passive->id }}"><i class="fas fa-trash-alt"></i></button>
                                                        @include('admin.passives.delete')
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Activos</th>
                                        <th>{{ $client->passives->sum('share') }}</th>
                                        <th>{{ $client->passives->sum('balace') }}</th>
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
