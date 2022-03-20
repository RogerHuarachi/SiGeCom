@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Dirección y Croquis</h1>
    </div>
@endsection
@section('content')
    @include('admin.residences.create')
    @include('admin.jobs.create')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info p-2">
                    <h3 class="card-title">
                        Croquis de Domicilio
                        @if (!$client->residence)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                            data-target="#residenceCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->residence)
                    <div class="card-body p-1">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Tipo de Propiedad</dt>
                                    <dd class="col-md-7">{{ $client->residence->property }}</dd>
                                    <dt class="col-md-5">Tiempo que reside en el lugar</dt>
                                    <dd class="col-md-7">{{ $client->residence->time }}</dd>
                                    <dt class="col-md-5">Dir. Domicilio</dt>
                                    <dd class="col-md-7">{{ $client->residence->direction }}</dd>
                                    <dt class="col-md-5">No.</dt>
                                    <dd class="col-md-7">{{ $client->residence->number }}</dd>
                                    <dt class="col-md-5">Zona/Barrio</dt>
                                    <dd class="col-md-7">{{ $client->residence->zone }}</dd>
                                    <dt class="col-md-5">Teléfono</dt>
                                    <dd class="col-md-7">{{ $client->residence->mobile }}</dd>
                                    <dt class="col-md-5">Provincia/Municipio/Comunidad</dt>
                                    <dd class="col-md-7">{{ $client->residence->province }}</dd>
                                    <dt class="col-md-5">Descripcion</dt>
                                    <dd class="col-md-7">{{ $client->residence->description }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <div class="row justify-content-center">
                                    <div class="img-fluid fa-border">
                                        <img src="{{ $client->residence->file }}" width="400" height="400">
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
                        @if (!$client->job)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#jobCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->job)
                    <div class="card-body p-1">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Tipo de Propiedad</dt>
                                    <dd class="col-md-7">{{ $client->job->property }}</dd>
                                    <dt class="col-md-5">Tiempo que reside en el lugar</dt>
                                    <dd class="col-md-7">{{ $client->job->time }}</dd>
                                    <dt class="col-md-5">Tipo de Negocio</dt>
                                    <dd class="col-md-7">{{ $client->job->business }}</dd>
                                    <dt class="col-md-5">Aclaracion</dt>
                                    <dd class="col-md-7">{{ $client->job->note }}</dd>
                                    <dt class="col-md-5">Dir. Domicilio</dt>
                                    <dd class="col-md-7">{{ $client->job->direction }}</dd>
                                    <dt class="col-md-5">No.</dt>
                                    <dd class="col-md-7">{{ $client->job->number }}</dd>
                                    <dt class="col-md-5">Zona/Barrio</dt>
                                    <dd class="col-md-7">{{ $client->job->zone }}</dd>
                                    <dt class="col-md-5">Teléfono</dt>
                                    <dd class="col-md-7">{{ $client->job->mobile }}</dd>
                                    <dt class="col-md-5">Provincia/Municipio/Comunidad</dt>
                                    <dd class="col-md-7">{{ $client->job->province }}</dd>
                                    <dt class="col-md-5">Descripcion</dt>
                                    <dd class="col-md-7">{{ $client->job->description }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <div class="row justify-content-center">
                                    <div class="img-fluid fa-border">
                                        <img src="{{ $client->job->file }}" width="400" height="400">
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
