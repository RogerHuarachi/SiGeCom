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
@include('user.clients.garante')
@include('user.clients.cogarante')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Datos del solicitante
                        <div class="btn-group" role="group" aria-label="Button group">
                            @if (!$debtor)
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#deudorCreate"><i class="fas fa-plus"></i></button>
                            @endif
                            @if ($debtor)
                                <form class="p-1" action="{{ route('usrsolicitudes.show', $debtor->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Sol.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrcroquis.show', $debtor->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Cro.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrdps.show', $debtor->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">D.P.</button>
                                </form>
                            @endif
                        </div>
                        <div class="btn-group" role="group" aria-label="Button group">
                            @if ($debtor)
                                <form class="p-1" action="{{ route('usrhcs.show', $debtor->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">H.C.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrinventarios.show', $debtor->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">Inv.</button>
                                </form>
                                <form class="p-1" action="{{ route('usrevaluacions.show', $debtor->id) }}" method="GET">
                                    <button class="btn btn-primary btn-xs" type="submit">E.S.G.</button>
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
                @if ($debtor)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Nombres y Apellidos</dt>
                                    <dd class="col-md-7">{{ $debtor->name }} {{ $debtor->lastName }}</dd>
                                    <dt class="col-md-5">Doc. de Identidad</dt>
                                    <dd class="col-md-7">{{ $debtor->identification }}</dd>
                                    <dt class="col-md-5">Edad</dt>
                                    <dd class="col-md-7">{{ $debtor->age }} Años</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $debtor->mobile }}</dd>
                                    <dt class="col-md-5">Situación Laboral</dt>
                                    <dd class="col-md-7">{{ $debtor->employment }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Sexo</dt>
                                    <dd class="col-md-7">{{ $debtor->gender }}</dd>
                                    <dt class="col-md-5">N° de Documento</dt>
                                    <dd class="col-md-7">{{ $debtor->number }} {{ $debtor->extension }}</dd>
                                    <dt class="col-md-5">Estado Civil</dt>
                                    <dd class="col-md-7">{{ $debtor->civil }}</dd>
                                    <dt class="col-md-5">Telefono Fijo</dt>
                                    <dd class="col-md-7">
                                        @if ($debtor->landline)
                                            {{ $debtor->landline }}
                                        @else
                                            --
                                        @endif
                                    <dt class="col-md-5">Actividad Primaria</dt>
                                    <dd class="col-md-7">{{ $debtor->mainActivity }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Fecha de Nacimiento</dt>
                                    <dd class="col-md-7">{{ $debtor->birth }}</dd>
                                    <dt class="col-md-5">Nacionalidad</dt>
                                    <dd class="col-md-7">{{ $debtor->nacionality }}</dd>
                                    <dt class="col-md-5">N° de Dependientes</dt>
                                    <dd class="col-md-7">
                                        @if ($debtor->dependents)
                                            {{ $debtor->dependents }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">NIT</dt>
                                    <dd class="col-md-7">
                                        @if ($debtor->nit)
                                            {{ $debtor->nit }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">Actividad Secundaria</dt>
                                    <dd class="col-md-7">
                                        @if ($debtor->secondaryActivity)
                                            {{ $debtor->secondaryActivity }}
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
                            @if (!$codebtor)
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#codeudorCreate"><i class="fas fa-plus"></i></button>
                            @endif
                            @if ($codebtor)
                                <form class="p-1" action="{{ route('usrconyegue.show', $codebtor->id) }}" method="GET">
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
                @if ($codebtor)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Nombres y Apellidos</dt>
                                    <dd class="col-md-7">{{ $codebtor->name }} {{ $codebtor->lastName }}</dd>
                                    <dt class="col-md-5">Doc. de Identidad</dt>
                                    <dd class="col-md-7">{{ $codebtor->identification }}</dd>
                                    <dt class="col-md-5">Edad</dt>
                                    <dd class="col-md-7">{{ $codebtor->age }} Años</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $codebtor->mobile }}</dd>
                                    <dt class="col-md-5">Situación Laboral</dt>
                                    <dd class="col-md-7">{{ $codebtor->employment }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Sexo</dt>
                                    <dd class="col-md-7">{{ $codebtor->gender }}</dd>
                                    <dt class="col-md-5">N° de Documento</dt>
                                    <dd class="col-md-7">{{ $codebtor->number }} {{ $codebtor->extension }}</dd>
                                    <dt class="col-md-5">Estado Civil</dt>
                                    <dd class="col-md-7">{{ $codebtor->civil }}</dd>
                                    <dt class="col-md-5">Telefono Fijo</dt>
                                    <dd class="col-md-7">
                                        @if ($codebtor->landline)
                                            {{ $codebtor->landline }}
                                        @else
                                            --
                                        @endif
                                    <dt class="col-md-5">Actividad Primaria</dt>
                                    <dd class="col-md-7">{{ $codebtor->mainActivity }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Fecha de Nacimiento</dt>
                                    <dd class="col-md-7">{{ $codebtor->birth }}</dd>
                                    <dt class="col-md-5">Nacionalidad</dt>
                                    <dd class="col-md-7">{{ $codebtor->nacionality }}</dd>
                                    <dt class="col-md-5">N° de Dependientes</dt>
                                    <dd class="col-md-7">
                                        @if ($codebtor->dependents)
                                            {{ $codebtor->dependents }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">NIT</dt>
                                    <dd class="col-md-7">
                                        @if ($codebtor->nit)
                                            {{ $codebtor->nit }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">Actividad Secundaria</dt>
                                    <dd class="col-md-7">
                                        @if ($codebtor->secondaryActivity)
                                            {{ $codebtor->secondaryActivity }}
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
