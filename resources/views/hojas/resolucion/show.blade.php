@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Resolución</h1>
    </div>
@endsection
@section('content')
    @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
        @include('admin.ddgs.create')
        @include('admin.members.create')
        @include('admin.justifications.create')
        @include('admin.crnas.create')
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Condiciones del prestamo
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-2">Cliente</dt>
                                <dd class="col-md-10">{{ $client->name }} {{ $client->lastName }}</dd>
                                @if ($codeudor)
                                    <dt class="col-md-2">Cliente</dt>
                                    <dd class="col-md-10">{{ $codeudor->name }} {{ $codeudor->lastName }}</dd>
                                @endif
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-2">CI</dt>
                                <dd class="col-md-10">{{ $client->number }} {{ $client->extension }}</dd>
                                @if ($codeudor)
                                    <dt class="col-md-2">CI</dt>
                                    <dd class="col-md-10">{{ $codeudor->number }} {{ $codeudor->extension }}</dd>
                                @endif
                            </dl>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Producto</dt>
                                <dd class="col-md-7">{{ $client->folder->product }}</dd>
                                <dt class="col-md-5">Plazo en meses</dt>
                                <dd class="col-md-7">{{ $client->loan->term }}</dd>
                                <dt class="col-md-5">Tasa de interes anual</dt>
                                <dd class="col-md-7">{{ $client->loan->rate }}</dd>
                                <dt class="col-md-5">Detalle del destino</dt>
                                <dd class="col-md-7">{{ $client->loan->detail }}</dd>
                                @if ($client->folder->rt)
                                    <dt class="col-md-5">Riesgo total</dt>
                                    <dd class="col-md-7">{{ $client->folder->rt }}</dd>
                                @endif
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Monto Aprobado</dt>
                                <dd class="col-md-7">{{ $client->loan->money }}</dd>
                                <dt class="col-md-5">Numero de cuotas</dt>
                                <dd class="col-md-7">{{ $client->loan->share }} Años</dd>
                                <dt class="col-md-5">Caedec destino</dt>
                                <dd class="col-md-7">constante</dd>
                                <dt class="col-md-5">Tipo de operación</dt>
                                <dd class="col-md-7">{{ $client->folder->operation }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Moneda</dt>
                                <dd class="col-md-7">{{ $client->folder->type }}</dd>
                                <dt class="col-md-5">Frecuencia de pago</dt>
                                <dd class="col-md-7">{{ $client->loan->frequency }}</dd>
                                <dt class="col-md-5">Destino del credito</dt>
                                <dd class="col-md-7">{{ $client->loan->destination }}</dd>
                                @if ($client->folder->mca)
                                    <dt class="col-md-5">monto credito anterior</dt>
                                    <dd class="col-md-7">{{ $client->folder->mca }}</dd>
                                @endif
                                @if ($client->folder->detail)
                                    <dt class="col-md-5">Saldo capital actual</dt>
                                    <dd class="col-md-7">{{ $client->folder->sca }}</dd>
                                @endif
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Detalle de Garantia
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ddgCreate">Garantia</button>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#memberCreate">Participante</button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body p-2">
                    <div class="row">
                        @if ($client->ddgs)
                            <div class="col-6">
                                <div class="row table-responsive">
                                    <table class="table table-sm table-light">
                                        <thead>
                                            <th>Garantia</th>
                                            <th>Valor Comercial</th>
                                            <th>Moto Coverturado</th>
                                            @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                <th>Opc</th>
                                            @endif
                                        </thead>
                                        <tbody>
                                            @foreach ($client->ddgs as $ddg)
                                                <tr>
                                                    <td>{{ $ddg->garanty }}</td>
                                                    <td>{{ $ddg->vc }}</td>
                                                    <td>{{ $ddg->mc }}</td>
                                                    @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                        <td>
                                                            <div class="btn-group">
                                                                @can('ddgs.update')
                                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ddgEdit{{ $ddg->id }}"><i class="fas fa-pen"></i></button>
                                                                    @include('admin.ddgs.edit')
                                                                @endcan
                                                                @can('ddgs.destroy')
                                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ddgDelete{{ $ddg->id }}"><i class="fas fa-trash-alt"></i></button>
                                                                    @include('admin.ddgs.delete')
                                                                @endcan
                                                            </div>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                        @if ($client->members)
                            <div class="col-6">
                                <div class="row table-responsive">
                                    <table class="table table-sm table-light">
                                        <thead>
                                            <th>Tipo</th>
                                            <th>Nombre</th>
                                            <th>CI</th>
                                            <th>Patrimonio total</th>
                                            <th>Covertura</th>
                                            <th>Opc</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($client->members as $member)
                                                <tr>
                                                    <td>{{ $member->type }}</td>
                                                    <td>{{ $member->name }}</td>
                                                    <td>{{ $member->ci }}</td>
                                                    <td>{{ number_format($member->pt, 2, ',', '.') }}</td>
                                                    <td>{{ number_format($member->mc, 2, ',', '.') }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            @can('members.update')
                                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#memberEdit{{ $member->id }}"><i class="fas fa-pen"></i></button>
                                                                @include('admin.members.edit')
                                                            @endcan
                                                            @can('members.destroy')
                                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#memberDelete{{ $member->id }}"><i class="fas fa-trash-alt"></i></button>
                                                                @include('admin.members.delete')
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
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Excepciones/Autorizaciones/Justificaciones
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#justificationCreate">
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
                    @if ($client->justifications)
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <th>Excepción</th>
                                    <th>Justificación</th>
                                    @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                        <th>Opc</th>
                                    @endif
                                </thead>
                                <tbody>
                                    @foreach ($client->justifications as $justification)
                                        <tr>
                                            <td>{{ $justification->type }}</td>
                                            <td>{{ $justification->justification }}</td>
                                            @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                                                <td>
                                                    <div class="btn-group">
                                                        @can('justifications.update')
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#justificationEdit{{ $justification->id }}"><i class="fas fa-pen"></i></button>
                                                            @include('admin.justifications.edit')
                                                        @endcan
                                                        @can('justifications.destroy')
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#justificationDelete{{ $justification->id }}"><i class="fas fa-trash-alt"></i></button>
                                                            @include('admin.justifications.delete')
                                                        @endcan
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Comentarios y recomendaciones nivel de aprobación
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            @if (!$crna)
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#crnaCreate">
                                    <i class="fas fa-plus"></i>
                                </button>
                            @endif
                            @if ($crna)
                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#crnaEdit{{ $crna->id }}">
                                    <i class="fas fa-pen"></i>
                                </button>
                                @include('admin.crnas.edit')
                            @endif
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body p-2">
                    @if ($crna)
                        <div class="row">
                            <div class="col-md-12">
                                <dl class="row">
                                    <dt class="col-md-2">Aclaración</dt>
                                    <dd class="col-md-10">{{ $crna->aclaration }}</dd>
                                </dl>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
