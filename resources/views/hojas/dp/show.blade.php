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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
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
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Tipo de Bien</th>
                                        <th>En Garantia</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->assets as $asset)
                                        <tr>
                                            <td>{{ $asset->type }}</td>
                                            <td>{{ $asset->warranty }}</td>
                                            <td>{{ $asset->value }}</td>
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
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
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
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Tipo de Bien</th>
                                        <th>Cuota Mensual</th>
                                        <th>Saldo Deudor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->passives as $passive)
                                        <tr>
                                            <td>{{ $passive->creditor }}</td>
                                            <td>{{ $passive->share }}</td>
                                            <td>{{ $passive->balace }}</td>
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
