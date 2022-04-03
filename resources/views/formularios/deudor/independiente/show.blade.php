@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Capeta</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">Capeta</li>
@endsection
@section('content')
@include('user.clients.deudor')
@include('user.clients.codeudor')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Datos del solicitante
                        <div class="btn-group" role="group" aria-label="Button group">
                            @if (!$folder->debtor())
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#deudorCreate"><i class="fas fa-plus"></i></button>
                            @endif
                            @if ($folder->debtor())
                                <form class="p-1" action="{{ route('usrsolicitudes.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Sol.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrcroquis.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Cro.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrdps.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">D.P.</button>
                                </form>
                                <form class="p-1" action="{{ route('usravaluos.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Aval.</button>
                                </form>
                            @endif
                        </div>
                        <div class="btn-group" role="group" aria-label="Button group">
                            @if ($folder->debtor())
                                <form class="p-1" action="{{ route('usrhcs.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">H.C.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrinventarios.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Inv.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrdocumentos.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">R.D.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrevaluacions.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">E.S.</button>
                                </form>
                            @endif
                        </div>
                        <div class="btn-group" role="group" aria-label="Button group">
                            @if ($folder->debtor())
                                <form class="p-1" action="{{ route('usrresolucions.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Res</button>
                                </form>
                            @endif
                        </div>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                @if ($folder->debtor())
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Nombres y Apellidos</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->name }} {{ $folder->debtor()->lastName }}</dd>
                                    <dt class="col-md-5">Doc. de Identidad</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->identification }}</dd>
                                    <dt class="col-md-5">Edad</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->age }} Años</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->mobile }}</dd>
                                    <dt class="col-md-5">Situación Laboral</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->employment }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Sexo</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->gender }}</dd>
                                    <dt class="col-md-5">N° de Documento</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->number }} {{ $folder->debtor()->extension }}</dd>
                                    <dt class="col-md-5">Estado Civil</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->civil }}</dd>
                                    <dt class="col-md-5">Telefono Fijo</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->debtor()->landline)
                                            {{ $folder->debtor()->landline }}
                                        @else
                                            --
                                        @endif
                                    <dt class="col-md-5">Actividad Primaria</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->mainActivity }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Fecha de Nacimiento</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->birth }}</dd>
                                    <dt class="col-md-5">Nacionalidad</dt>
                                    <dd class="col-md-7">{{ $folder->debtor()->nacionality }}</dd>
                                    <dt class="col-md-5">N° de Dependientes</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->debtor()->dependents)
                                            {{ $folder->debtor()->dependents }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">NIT</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->debtor()->nit)
                                            {{ $folder->debtor()->nit }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">Actividad Secundaria</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->debtor()->secondaryActivity)
                                            {{ $folder->debtor()->secondaryActivity }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                </dl>
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
                <div class="card-header">
                    <h3 class="card-title">
                        Datos del conyegue y/o codeudor
                        <div class="btn-group" role="group" aria-label="Button group">
                            @if (!$folder->codebtor())
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#codeudorCreate"><i class="fas fa-plus"></i></button>
                            @endif
                            @if ($folder->codebtor())
                                <form class="p-1" action="{{ route('usrconyegue.show', $folder->codebtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Referencia</button>
                                </form>
                            @endif
                        </div>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                @if ($folder->codebtor())
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Nombres y Apellidos</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->name }} {{ $folder->codebtor()->lastName }}</dd>
                                    <dt class="col-md-5">Doc. de Identidad</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->identification }}</dd>
                                    <dt class="col-md-5">Edad</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->age }} Años</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->mobile }}</dd>
                                    <dt class="col-md-5">Situación Laboral</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->employment }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Sexo</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->gender }}</dd>
                                    <dt class="col-md-5">N° de Documento</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->number }} {{ $folder->codebtor()->extension }}</dd>
                                    <dt class="col-md-5">Estado Civil</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->civil }}</dd>
                                    <dt class="col-md-5">Telefono Fijo</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->codebtor()->landline)
                                            {{ $folder->codebtor()->landline }}
                                        @else
                                            --
                                        @endif
                                    <dt class="col-md-5">Actividad Primaria</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->mainActivity }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Fecha de Nacimiento</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->birth }}</dd>
                                    <dt class="col-md-5">Nacionalidad</dt>
                                    <dd class="col-md-7">{{ $folder->codebtor()->nacionality }}</dd>
                                    <dt class="col-md-5">N° de Dependientes</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->codebtor()->dependents)
                                            {{ $folder->codebtor()->dependents }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">NIT</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->codebtor()->nit)
                                            {{ $folder->codebtor()->nit }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">Actividad Secundaria</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->codebtor()->secondaryActivity)
                                            {{ $folder->codebtor()->secondaryActivity }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
