@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Formulario de Evaluacion</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">clientes</li>
    <li class="breadcrumb-item">ver</li>
@endsection
@section('content')
    @include('option.confirmation')
    @include('admin.personals.create')
    @include('admin.commercials.create')
    @include('admin.businesses.create')
    @include('admin.loans.create')
    @include('admin.residences.create')
    @include('admin.jobs.create')
    @include('admin.assets.create')
    @include('admin.passives.create')
    @include('admin.works.create')
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Datos del {{ $client->type }}
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
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
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Referencia Personal
                        @if (!$client->personal)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#personalCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
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
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Referencia Comercial
                        @if (!$client->commercial)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#commercialCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
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
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Datos del Prestamo
                        @if (!$client->loan)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#loanCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->loan)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Monto</dt>
                                    <dd class="col-md-7">{{ $client->loan->money }}</dd>
                                    <dt class="col-md-5">Moneda</dt>
                                    <dd class="col-md-7">{{ $client->loan->currency }}</dd>
                                    <dt class="col-md-5">Tasa</dt>
                                    <dd class="col-md-7">{{ $client->loan->rate }}%</dd>
                                    <dt class="col-md-5">Plazo</dt>
                                    <dd class="col-md-7">{{ $client->loan->term }}</dd>
                                    <dt class="col-md-5">N° de Cuotas</dt>
                                    <dd class="col-md-7">{{ $client->loan->share }}</dd>
                                    <dt class="col-md-5">Frecuencia</dt>
                                    <dd class="col-md-7">{{ $client->loan->frequency }}</dd>
                                    <dt class="col-md-5">Tipo de Cuota</dt>
                                    <dd class="col-md-7">{{ $client->loan->feeType }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-8">
                                <dl class="row">
                                    <dt class="col-md-5">Vencimiento fecha Fija cada</dt>
                                    <dd class="col-md-7">{{ $client->loan->expiration }}</dd>
                                    <dt class="col-md-5">Cuánto puede Ud. Pagar  de cuota /mes?</dt>
                                    <dd class="col-md-7">{{ $client->loan->choose }}</dd>
                                    <dt class="col-md-5">Garantia Ofrecida</dt>
                                    <dd class="col-md-7">{{ $client->loan->warrantyOne }}</dd>
                                    <dt class="col-md-5">y</dt>
                                    <dd class="col-md-7">{{ $client->loan->warrantyTwo }}</dd>
                                    <dt class="col-md-5">Destino de Credito</dt>
                                    <dd class="col-md-7">{{ $client->loan->destination }}</dd>
                                    <dt class="col-md-5">Detalle especifico del Destino</dt>
                                    <dd class="col-md-7">{{ $client->loan->detail }}</dd>
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
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Actividad Primaria
                        @if (!$client->primary())
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#businessCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->primary())
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">CAEDEC Actividad Primaria</dt>
                                    <dd class="col-md-7">{{ $client->primary()->caedec->code }} {{ $client->primary()->caedec->description }}</dd>
                                    <dt class="col-md-5">Actividad Especifica</dt>
                                    <dd class="col-md-7">{{ $client->primary()->activity }}</dd>
                                    <dt class="col-md-5">Profeción/Ocupación</dt>
                                    <dd class="col-md-7">{{ $client->primary()->profession }}</dd>
                                    <dt class="col-md-5">Realizada por</dt>
                                    <dd class="col-md-7">{{ $client->primary()->responsable }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Experiencia en el Rubro</dt>
                                    <dd class="col-md-7">{{ $client->primary()->experience }}</dd>
                                    <dt class="col-md-5">Antiguedad del Negocio</dt>
                                    <dd class="col-md-7">{{ $client->primary()->antiquity }}</dd>
                                    <dt class="col-md-5">Propiedad del puesto y/o Lugar</dt>
                                    <dd class="col-md-7">{{ $client->primary()->property }}</dd>
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
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Actividad Secundaria
                        @if (!$client->primary())
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#businessCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->secondary())
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">CAEDEC Actividad Primaria</dt>
                                    <dd class="col-md-7">{{ $client->secondary()->caedec->code }} {{ $client->secondary()->caedec->description }}</dd>
                                    <dt class="col-md-5">Actividad Especifica</dt>
                                    <dd class="col-md-7">{{ $client->secondary()->activity }}</dd>
                                    <dt class="col-md-5">Profeción/Ocupación</dt>
                                    <dd class="col-md-7">{{ $client->secondary()->profession }}</dd>
                                    <dt class="col-md-5">Realizada por</dt>
                                    <dd class="col-md-7">{{ $client->secondary()->responsable }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Experiencia en el Rubro</dt>
                                    <dd class="col-md-7">{{ $client->secondary()->experience }}</dd>
                                    <dt class="col-md-5">Antiguedad del Negocio</dt>
                                    <dd class="col-md-7">{{ $client->secondary()->antiquity }}</dd>
                                    <dt class="col-md-5">Propiedad del puesto y/o Lugar</dt>
                                    <dd class="col-md-7">{{ $client->secondary()->property }}</dd>
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
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Croquis de Domicilio
                        @if (!$client->residence)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                            data-target="#residenceCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->residence)
                    <div class="card-body">
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
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Croquis de Negocio
                        @if (!$client->job)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#jobCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->job)
                    <div class="card-body">
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
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Activos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#assetCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->assets)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Tipo de Bien</th>
                                        <th>En Garantia</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->assets as $asset)
                                        <tr>
                                            <td>{{ $asset->type }}</td>
                                            <td>{{ $asset->warranty }}</td>
                                            <td>{{ $asset->value }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Activos</th>
                                        <th></th>
                                        <th>{{ $client->assets->sum('value') }}</th>
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
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Pasivos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#passiveCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->passives)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Tipo de Bien</th>
                                        <th>En Garantia</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->passives as $passive)
                                        <tr>
                                            <td>{{ $passive->creditor }}</td>
                                            <td>{{ $passive->share }}</td>
                                            <td>{{ $passive->balace }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Activos</th>
                                        <th>{{ $client->passives->sum('share') }}</th>
                                        <th>{{ $client->passives->sum('balace') }}</th>
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
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Bienes de Negocio
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#workCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->works)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Tipo de Bien</th>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->works as $work)
                                        <tr>
                                            <td>{{ $work->type }}</td>
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
                                        <th></th>
                                        <th>{{ $client->works->sum('value') }}</th>
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
