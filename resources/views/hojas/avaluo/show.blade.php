@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Avaluo de Bienes Negocio y Familia</h1>
    </div>
@endsection
@section('content')
    @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
        @include('admin.works.sub.muebles')
        @include('admin.works.sub.maquinarias')
        @include('admin.works.sub.mercaderias')
        @include('admin.families.create')
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">
                        (Negocio) Muebles y Enseres
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#mueblesCreate">
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

                @if ($client->mueble())
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                            <th>Opc</th>
                                        @endif
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
                                            @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                <td>
                                                    <div class="btn-group">
                                                        @can('works.update')
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#workEdit{{ $work->id }}"><i class="fas fa-pen"></i></button>
                                                            @include('admin.works.edit')
                                                        @endcan
                                                        @can('works.destroy')
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#workDelete{{ $work->id }}"><i class="fas fa-trash-alt"></i></button>
                                                            @include('admin.works.delete')
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">
                        (Negocio) Maquinaria y Equipos
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#maquinariasCreate">
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

                @if ($client->maquinaria())
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                            <th>Opc</th>
                                        @endif
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
                                            @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                <td>
                                                    <div class="btn-group">
                                                        @can('works.update')
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#workEdit{{ $work->id }}"><i class="fas fa-pen"></i></button>
                                                            @include('admin.works.edit')
                                                        @endcan
                                                        @can('works.destroy')
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#workDelete{{ $work->id }}"><i class="fas fa-trash-alt"></i></button>
                                                            @include('admin.works.delete')
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">
                        (Negocio) Mercaderia
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#mercaderiasCreate">
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

                @if ($client->mercaderia())
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                            <th>Opc</th>
                                        @endif
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
                                            @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                <td>
                                                    <div class="btn-group">
                                                        @can('works.update')
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#workEdit{{ $work->id }}"><i class="fas fa-pen"></i></button>
                                                            @include('admin.works.edit')
                                                        @endcan
                                                        @can('works.destroy')
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#workDelete{{ $work->id }}"><i class="fas fa-trash-alt"></i></button>
                                                            @include('admin.works.delete')
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">
                        (Familia) Muebles y Enseres
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#familyCreate">
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

                @if ($client->families)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>En Garantia</th>
                                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                            <th>Opc</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->families as $family)
                                        <tr>
                                            <td>{{ $family->amount }}</td>
                                            <td>{{ $family->description }}</td>
                                            <td>{{ $family->value }}</td>
                                            <td>{{ $family->state }}</td>
                                            @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                <td>
                                                    <div class="btn-group">
                                                        @can('works.update')
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#workEdit{{ $work->id }}"><i class="fas fa-pen"></i></button>
                                                            @include('admin.works.edit')
                                                        @endcan
                                                        @can('works.destroy')
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#workDelete{{ $work->id }}"><i class="fas fa-trash-alt"></i></button>
                                                            @include('admin.works.delete')
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
