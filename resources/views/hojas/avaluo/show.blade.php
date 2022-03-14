@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Avaluo de Bienes Negocio y Familia</h1>
    </div>
@endsection
@section('content')
    @include('admin.works.sub.muebles')
    @include('admin.works.sub.maquinarias')
    @include('admin.works.sub.mercaderias')
    @include('admin.families.create')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        (Negocio) Muebles y Enseres
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#mueblesCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->mueble())
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->mueble() as $work)
                                        <tr>
                                            <td>{{ $work->amount }}</td>
                                            <td>{{ $work->description }}</td>
                                            <td>{{ $work->value }}</td>
                                            <td>{{ $work->exercise }}</td>
                                            <td>{{ $work->state }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th>{{ $client->mueble()->sum('value') }}</th>
                                        <th></th>
                                        <th></th>
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
                        (Negocio) Maquinaria y Equipos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#maquinariasCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->maquinaria())
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->maquinaria() as $work)
                                        <tr>
                                            <td>{{ $work->amount }}</td>
                                            <td>{{ $work->description }}</td>
                                            <td>{{ $work->value }}</td>
                                            <td>{{ $work->exercise }}</td>
                                            <td>{{ $work->state }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th>{{ $client->maquinaria()->sum('value') }}</th>
                                        <th></th>
                                        <th></th>
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
                        (Negocio) Mercaderia
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#mercaderiasCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->mercaderia())
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->mercaderia() as $work)
                                        <tr>
                                            <td>{{ $work->amount }}</td>
                                            <td>{{ $work->description }}</td>
                                            <td>{{ $work->value }}</td>
                                            <td>{{ $work->exercise }}</td>
                                            <td>{{ $work->state }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th>{{ $client->mercaderia()->sum('value') }}</th>
                                        <th></th>
                                        <th></th>
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
                        (Familia) Muebles y Enseres
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#familyCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->families)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->families as $family)
                                        <tr>
                                            <td>{{ $family->amount }}</td>
                                            <td>{{ $family->description }}</td>
                                            <td>{{ $family->value }}</td>
                                            <td>{{ $family->state }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th>{{ $client->families->sum('value') }}</th>
                                        <th></th>
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
