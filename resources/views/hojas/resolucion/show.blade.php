@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Resolución</h1>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-info p-2">
                <h3 class="card-title">
                    Condiciones del prestamo
                    {{-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#productCreate"><i class="fas fa-plus"></i></button> --}}
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">}

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
@endsection
