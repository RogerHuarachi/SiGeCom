@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Dirección y Croquis</h1>
        <ol class="breadcrumb float-sm-right pl-1">
            <form class="p-1" action="{{ route('print.croqui', $client->id) }}" method="GET">
                <button class="btn btn-primary btn-xs" type="submit"><i class="fa fa-print" aria-hidden="true"></i></button>
            </form>
        </ol>
    </div>
@endsection
@section('content')
    @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
        @include('admin.residences.create')
        @include('admin.jobs.create')
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Croquis de Domicilio
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            @if (!$residence)
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#residenceCreate">
                                    <i class="fas fa-plus"></i>
                                </button>
                            @endif
                            @if ($residence)
                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#residenceEdit{{ $residence->id }}">
                                    <i class="fas fa-pen"></i>
                                </button>
                                @include('admin.residences.edit')
                            @endif
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($residence)
                    <div class="card-body p-1">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Tipo de Propiedad</dt>
                                    <dd class="col-md-7">{{ $residence->property }}</dd>
                                    <dt class="col-md-5">Tiempo que reside en el lugar</dt>
                                    <dd class="col-md-7">{{ $residence->time }} meses</dd>
                                    <dt class="col-md-5">Dir. Domicilio</dt>
                                    <dd class="col-md-7">{{ $residence->direction }}</dd>
                                    <dt class="col-md-5">No.</dt>
                                    <dd class="col-md-7">{{ $residence->number }}</dd>
                                    <dt class="col-md-5">Zona/Barrio</dt>
                                    <dd class="col-md-7">{{ $residence->zone }}</dd>
                                    <dt class="col-md-5">Teléfono</dt>
                                    <dd class="col-md-7">{{ $residence->mobile }}</dd>
                                    <dt class="col-md-5">Provincia/Municipio/Comunidad</dt>
                                    <dd class="col-md-7">{{ $residence->province }}</dd>
                                    <dt class="col-md-5">Descripcion</dt>
                                    <dd class="col-md-7">{{ $residence->description }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <div class="row justify-content-center">
                                    <div class="img-fluid fa-border">
                                        <img src="{{ $residence->file }}" height="250">
                                    </div>
                                </div>
                            </div>
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
                        Croquis de Negocio
                        @if (Auth::user()->id == $client->folder->user->id && !$client->folder->state)
                            @if (!$job)
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#jobCreate">
                                    <i class="fas fa-plus"></i>
                                </button>
                            @endif
                            @if ($job)
                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#jobEdit{{ $job->id }}">
                                    <i class="fas fa-pen"></i>
                                </button>
                                @include('admin.jobs.edit')
                            @endif
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($job)
                    <div class="card-body p-1">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Tipo de Propiedad</dt>
                                    <dd class="col-md-7">{{ $job->property }}</dd>
                                    <dt class="col-md-5">Tiempo que reside en el lugar meses</dt>
                                    <dd class="col-md-7">{{ $job->time }}</dd>
                                    <dt class="col-md-5">Tipo de Negocio</dt>
                                    <dd class="col-md-7">{{ $job->business }}</dd>
                                    <dt class="col-md-5">Aclaracion</dt>
                                    <dd class="col-md-7">{{ $job->note }}</dd>
                                    <dt class="col-md-5">Dir. Domicilio</dt>
                                    <dd class="col-md-7">{{ $job->direction }}</dd>
                                    <dt class="col-md-5">No.</dt>
                                    <dd class="col-md-7">{{ $job->number }}</dd>
                                    <dt class="col-md-5">Zona/Barrio</dt>
                                    <dd class="col-md-7">{{ $job->zone }}</dd>
                                    <dt class="col-md-5">Teléfono</dt>
                                    <dd class="col-md-7">{{ $job->mobile }}</dd>
                                    <dt class="col-md-5">Provincia/Municipio/Comunidad</dt>
                                    <dd class="col-md-7">{{ $job->province }}</dd>
                                    <dt class="col-md-5">Descripcion</dt>
                                    <dd class="col-md-7">{{ $job->description }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <div class="row justify-content-center">
                                    <div class="img-fluid fa-border">
                                        <img src="{{ $job->file }}" height="250">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')

<script>
function domicilio() {
    d=document.getElementById("validDom");
    if (navigator.geolocation){
        // d.innerHTML="<p>Tu dispositivo soporta la geolocalización.</p>";
        console.log("Tu dispositivo soporta la geolocalización")
        navigator.geolocation.getCurrentPosition(showPositionDom);
    }
    else {
        // d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaización.</p>";
        console.log("Lo sentimos, tu dispositivo no admite la geolocaización")
    }
}
function showPositionDom(position){
    latitud=position.coords.latitude;
    longitud=position.coords.longitude;
    document.getElementById("domlat").value=latitud;
    document.getElementById("domlon").value=longitud;
}
function negocio() {
    d=document.getElementById("validNeg");
    if (navigator.geolocation){
        // d.innerHTML="<p>Tu dispositivo soporta la geolocalización.</p>";
        console.log("Tu dispositivo soporta la geolocalización")
        navigator.geolocation.getCurrentPosition(showPositionNeg);
    }
    else {
        // d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaización.</p>";
        console.log("Lo sentimos, tu dispositivo no admite la geolocaización")
    }
    }
function showPositionNeg(position){
    latitud=position.coords.latitude;
    longitud=position.coords.longitude;
    document.getElementById("neglat").value=latitud;
    document.getElementById("neglon").value=longitud;
}
</script>
@endsection
