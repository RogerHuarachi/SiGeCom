@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Solicitud de Préstamo</h1>
    </div>
@endsection
@section('content')
    @include('option.confirmation')
    @include('admin.personals.create')
    @include('admin.commercials.create')
    @include('admin.businesses.create')
    @include('admin.loans.create')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Datos del {{ $client->type }}
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Nombres y Apellidos</dt>
                                <dd class="col-md-7">{{ $client->name }} {{ $client->lastName }}</dd>
                                <dt class="col-md-5">Doc. de Identidad</dt>
                                <dd class="col-md-7">{{ $client->identification }}</dd>
                                <dt class="col-md-5">Edad</dt>
                                <dd class="col-md-7">{{ $client->age }} Años</dd>
                                <dt class="col-md-5">Telefono Movil</dt>
                                <dd class="col-md-7">{{ $client->mobile }}</dd>
                                <dt class="col-md-5">Situación Laboral</dt>
                                <dd class="col-md-7">{{ $client->employment }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Sexo</dt>
                                <dd class="col-md-7">{{ $client->gender }}</dd>
                                <dt class="col-md-5">N° de Documento</dt>
                                <dd class="col-md-7">{{ $client->number }} {{ $client->extension }}</dd>
                                <dt class="col-md-5">Estado Civil</dt>
                                <dd class="col-md-7">{{ $client->civil }}</dd>
                                <dt class="col-md-5">Telefono Fijo</dt>
                                <dd class="col-md-7">
                                    @if ($client->landline)
                                        {{ $client->landline }}
                                    @else
                                        --
                                    @endif
                                <dt class="col-md-5">Actividad Primaria</dt>
                                <dd class="col-md-7">{{ $client->mainActivity }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Fecha de Nacimiento</dt>
                                <dd class="col-md-7">{{ $client->birth }}</dd>
                                <dt class="col-md-5">Nacionalidad</dt>
                                <dd class="col-md-7">{{ $client->nacionality }}</dd>
                                <dt class="col-md-5">N° de Dependientes</dt>
                                <dd class="col-md-7">
                                    @if ($client->dependents)
                                        {{ $client->dependents }}
                                    @else
                                        --
                                    @endif
                                </dd>
                                <dt class="col-md-5">NIT</dt>
                                <dd class="col-md-7">
                                    @if ($client->nit)
                                        {{ $client->nit }}
                                    @else
                                        --
                                    @endif
                                </dd>
                                <dt class="col-md-5">Actividad Secundaria</dt>
                                <dd class="col-md-7">
                                    @if ($client->secondaryActivity)
                                        {{ $client->secondaryActivity }}
                                    @else
                                        --
                                    @endif
                                </dd>
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
                <div class="card-header">
                    <h3 class="card-title">
                        Referencia Personal
                        @if (!$client->personal)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#personalCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                @if ($client->personal)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Nombre</dt>
                                    <dd class="col-md-7">{{ $client->personal->name }}</dd>
                                    <dt class="col-md-5">Direccion</dt>
                                    <dd class="col-md-7">{{ $client->personal->address }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Vinculo</dt>
                                    <dd class="col-md-7">{{ $client->personal->link }}</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $client->personal->mobile }}</dd>
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
                        Referencia Comercial
                        @if (!$client->commercial)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#commercialCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->commercial)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Nombre</dt>
                                    <dd class="col-md-7">{{ $client->commercial->name }}</dd>
                                    <dt class="col-md-5">Direccion</dt>
                                    <dd class="col-md-7">{{ $client->commercial->address }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Vinculo</dt>
                                    <dd class="col-md-7">{{ $client->commercial->link }}</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $client->commercial->mobile }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
