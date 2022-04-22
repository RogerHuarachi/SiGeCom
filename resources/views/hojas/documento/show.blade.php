@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Recepción de Documentos</h1>
    </div>
@endsection
@section('content')
    @include('admin.propertys.inmueble')
    @include('admin.vehicles.vehiculo')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Recepcion de Documentos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#inmuebleCreate">Inmueble</button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->inmueble())
                    <div class="card-body p-2">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>N° Doc</th>
                                        <th>N° FOjas</th>
                                        <th>Observacion</th>
                                        <th>Opc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->inmueble() as $document)
                                        <tr>
                                            <td>{{ $document->description }}</td>
                                            <td>{{ $document->doc }}</td>
                                            <td>{{ $document->fojas }}</td>
                                            <td>{{ $document->obs }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @can('documents.update')
                                                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#documentEdit{{ $document->id }}"><i class="fas fa-pen"></i></button>
                                                        @include('admin.documents.edit')
                                                    @endcan
                                                    @can('documents.destroy')
                                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#documentDelete{{ $document->id }}"><i class="fas fa-trash-alt"></i></button>
                                                        @include('admin.documents.delete')
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Recepcion de Documentos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#vehicleCreate">Vehiculo</button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->vehiculo())
                    <div class="card-body p-2">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>N° Doc</th>
                                        <th>N° FOjas</th>
                                        <th>Observacion</th>
                                        <th>Opc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->vehiculo() as $document)
                                        <tr>
                                            <td>{{ $document->description }}</td>
                                            <td>{{ $document->doc }}</td>
                                            <td>{{ $document->fojas }}</td>
                                            <td>{{ $document->obs }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @can('documents.update')
                                                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#documentEdit{{ $document->id }}"><i class="fas fa-pen"></i></button>
                                                        @include('admin.documents.edit')
                                                    @endcan
                                                    @can('documents.destroy')
                                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#documentDelete{{ $document->id }}"><i class="fas fa-trash-alt"></i></button>
                                                        @include('admin.documents.delete')
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
