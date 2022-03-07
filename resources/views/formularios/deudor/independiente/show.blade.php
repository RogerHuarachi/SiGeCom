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
                                <form class="p-1" action="{{ route('usrclients.show', $folder->debtor()->id) }}" method="GET">
                                    <button class="btn btn-primary btn-lg" type="submit">Info</button>
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
                        @if (!$folder->guarantor())
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#codeudorCreate"><i class="fas fa-plus"></i></button>
                        @endif
                        @if ($folder->guarantor())
                            {{-- <form class="p-1" action="{{ route('usrsolicitud.sol', $folder->debtor()->id) }}" method="GET"> --}}
                                <button class="btn btn-primary btn-lg" type="submit">Info</button>
                            {{-- </form> --}}
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                @if ($folder->guarantor())
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Nombres y Apellidos</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->name }} {{ $folder->guarantor()->lastName }}</dd>
                                    <dt class="col-md-5">Doc. de Identidad</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->identification }}</dd>
                                    <dt class="col-md-5">Edad</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->age }} Años</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->mobile }}</dd>
                                    <dt class="col-md-5">Situación Laboral</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->employment }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Sexo</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->gender }}</dd>
                                    <dt class="col-md-5">N° de Documento</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->number }} {{ $folder->guarantor()->extension }}</dd>
                                    <dt class="col-md-5">Estado Civil</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->civil }}</dd>
                                    <dt class="col-md-5">Telefono Fijo</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->guarantor()->landline)
                                            {{ $folder->guarantor()->landline }}
                                        @else
                                            --
                                        @endif
                                    <dt class="col-md-5">Actividad Primaria</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->mainActivity }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Fecha de Nacimiento</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->birth }}</dd>
                                    <dt class="col-md-5">Nacionalidad</dt>
                                    <dd class="col-md-7">{{ $folder->guarantor()->nacionality }}</dd>
                                    <dt class="col-md-5">N° de Dependientes</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->guarantor()->dependents)
                                            {{ $folder->guarantor()->dependents }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">NIT</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->guarantor()->nit)
                                            {{ $folder->guarantor()->nit }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">Actividad Secundaria</dt>
                                    <dd class="col-md-7">
                                        @if ($folder->guarantor()->secondaryActivity)
                                            {{ $folder->guarantor()->secondaryActivity }}
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

{{-- <div class="row">
    <form class="p-1" action="{{ route('usrsolicitud.sol', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Solicitud</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Croquis</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Avaluo de Bienes</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">D. Patrimonial</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Evaluacion Soc.</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Hoja de Costo</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Inventario Act. Prim</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Inventario Act. Sec.</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Av. Garantia Premdaria</button>
    </form>
    <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
        <button class="btn btn-primary btn-lg" type="submit">Recp. de Doc.</button>
    </form>
</div> --}}
