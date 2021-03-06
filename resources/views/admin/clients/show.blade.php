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
    @include('admin.loans.create')
    @include('admin.businesses.create')
    @include('admin.residences.create')
    @include('admin.jobs.create')
    @include('admin.assets.create')
    @include('admin.passives.create')
    @include('admin.works.create')
    @include('admin.families.create')
    @include('admin.products.create')
    @include('admin.inventories.create')
    @include('admin.propertys.create')
    @include('admin.vehicles.create')
    @include('admin.children.create')
    @include('admin.payments.create')
    @include('admin.debts.create')
    @include('admin.days.create')
    @include('admin.weeks.create')
    @include('admin.months.create')
    @include('admin.mubs.create')
    @include('admin.cmubs.create')
    @include('admin.gmvs.create')
    @include('admin.ppsifs.create')
    @include('admin.gfos.create')
    @include('admin.gfs.create')
    @include('admin.cdgs.create')
    @include('admin.ois.create')
    @include('admin.acns.create')
    @include('admin.afns.create')
    @include('admin.oans.create')
    @include('admin.afs.create')
    @include('admin.oafs.create')
    @include('admin.cbals.create')
    @include('admin.ddgs.create')
    @include('admin.members.create')
    @include('admin.justifications.create')
    @include('admin.crnas.create')
    @include('admin.dges.create')
    @include('admin.icos.create')
    @include('admin.gcos.create')
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
                                <dd class="col-md-7">{{ $client->age }} A??os</dd>
                                <dt class="col-md-5">Telefono Movil</dt>
                                <dd class="col-md-7">{{ $client->mobile }}</dd>
                                <dt class="col-md-5">Situaci??n Laboral</dt>
                                <dd class="col-md-7">{{ $client->employment }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Sexo</dt>
                                <dd class="col-md-7">{{ $client->gender }}</dd>
                                <dt class="col-md-5">N?? de Documento</dt>
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
                                <dt class="col-md-5">N?? de Dependientes</dt>
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
                                    <dt class="col-md-5">N?? de Cuotas</dt>
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
                                    <dt class="col-md-5">Cu??nto puede Ud. Pagar  de cuota /mes?</dt>
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
                                    <dt class="col-md-5">Profeci??n/Ocupaci??n</dt>
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
                        @if (!$client->secondary())
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
                                    <dt class="col-md-5">Profeci??n/Ocupaci??n</dt>
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
                                    <dt class="col-md-5">Tel??fono</dt>
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
                                    <dt class="col-md-5">Tel??fono</dt>
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
                                        <th>Estado</th>
                                        <th>Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->passives as $passive)
                                        <tr>
                                            <td>{{ $passive->creditor }}</td>
                                            <td>{{ $passive->share }}</td>
                                            <td>{{ $passive->balace }}</td>
                                            <td>{{ $passive->state }}</td>
                                            <td>{{ $passive->value }}</td>
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
                                        <th>Descripci??n de Activo</th>
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
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Bienes de Familia
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#familyCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->families)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripci??n de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->families as $family)
                                        <tr>
                                            <td>{{ $family->amount }}</td>
                                            <td>{{ $family->description }}</td>
                                            <td>{{ $family->value }}</td>
                                            <td>{{ $family->state }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th></th>
                                        <th>{{ $client->families->sum('value') }}</th>
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
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Productos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#productCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if ($client->products)
                        @foreach ($client->products as $product)
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Insumos de {{ $product->name }}
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#itemCreate{{ $product->id }}"><i class="fas fa-plus"></i></button>
                                        @include('admin.items.create')
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <table class="table table-sm table-light">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Cantidad</th>
                                                    <th>Unidad</th>
                                                    <th>Rendimiento</th>
                                                    <th>Precio U</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($product->items as $item)
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->amount }}</td>
                                                        <td>{{ $item->unit }}</td>
                                                        <td>{{ $item->performance }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->total }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>{{ $product->items->sum('total') }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Inventario
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#inventoryCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->inventories)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Tipo de Producto</th>
                                        <th>Cantidad</th>
                                        <th>Unidad</th>
                                        <th>Producto</th>
                                        <th>Precio de Compra</th>
                                        <th>Precio de Venta</th>
                                        <th>MB</th>
                                        <th>% Avance</th>
                                        <th>Valor Inventario MP</th>
                                        <th>Valor Inventario PP</th>
                                        <th>Valor Inventario PT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->inventories as $inventory)
                                        <tr>
                                            <td>{{ $inventory->type }}</td>
                                            <td>{{ $inventory->amount }}</td>
                                            <td>{{ $inventory->unit }}</td>
                                            <td>{{ $inventory->name }}</td>
                                            <td>{{ $inventory->buys }}</td>
                                            <td>{{ $inventory->sale }}</td>
                                            <td>{{ $inventory->mb }}</td>
                                            <td>{{ $inventory->advance }}</td>
                                            <td>{{ $inventory->vimp }}</td>
                                            <td>{{ $inventory->vipp }}</td>
                                            <td>{{ $inventory->vipt }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Activos</th>
                                        <th>{{ $client->inventories->sum('share') }}</th>
                                        <th>{{ $client->inventories->sum('balace') }}</th>
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
                        Recepcion de Documentos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#propertyCreate">Inmueble</button>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#vehicleCreate">Vehiculo</button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->documents)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>N?? Doc</th>
                                        <th>N?? FOjas</th>
                                        <th>Observacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->documents as $document)
                                        <tr>
                                            <td>{{ $document->description }}</td>
                                            <td>{{ $document->doc }}</td>
                                            <td>{{ $document->fojas }}</td>
                                            <td>{{ $document->obs }}</td>
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
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Descripcion de la unidad familiar
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#childCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->children)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Estudia</th>
                                        <th>Donde</th>
                                        <th>Tipo de Entidad</th>
                                        <th>Otras Actividades</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->children as $child)
                                        <tr>
                                            <td>{{ $child->age }}</td>
                                            <td>{{ $child->gender }}</td>
                                            <td>{{ $child->student }}</td>
                                            <td>{{ $child->where }}</td>
                                            <td>{{ $child->type }}</td>
                                            <td>{{ $child->other }}</td>
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
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Comportamiento de Pago
                        @if (!$client->payment)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#paymentCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->payment)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Proeza Atrasos</dt>
                                    <dd class="col-md-7">{{ $client->payment->proeza }}</dd>
                                    <dt class="col-md-5">Razon</dt>
                                    <dd class="col-md-7">{{ $client->payment->obs1 }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-8">
                                <dl class="row">
                                    <dt class="col-md-5">Observaciones BIC</dt>
                                    <dd class="col-md-7">{{ $client->payment->bic }}</dd>
                                    <dt class="col-md-5">Razon</dt>
                                    <dd class="col-md-7">{{ $client->payment->obs2 }}</dd>
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
                        Endeudamiento en otras instituciones
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#debtCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->debts)
                    <div class="card-body">
                        @foreach ($client->debts as $debt)
                            <div class="row">
                                <div class="col-md-4">
                                    <dl class="row">
                                        <dt class="col-md-5">Entidad</dt>
                                        <dd class="col-md-7">{{ $debt->entity }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-8">
                                    <dl class="row">
                                        <dt class="col-md-5">Calificacion</dt>
                                        <dd class="col-md-7">{{ $debt->qualification }}</dd>
                                    </dl>
                                </div>
                            </div>
                        @endforeach
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
                        Comportamiento de Ventas
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#dayCreate">Diario</button>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#weekCreate">Semanal</button>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#monthCreate">Mensual</button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->sales)
                    <div class="card-body">
                            <div class="row">
                        @foreach ($client->sales as $sale)
                                <div class="col">
                                    <dl class="row">
                                        <dt class="col-md-5">{{ $sale->item }}</dt>
                                        <dd class="col-md-7">{{ $sale->money }}</dd>
                                    </dl>
                                </div>
                        @endforeach
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
                        MUB
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#mubCreate"><i class="fas fa-plus"></i></button>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cmubCreate">Aclaracion</button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if ($client->mubs)
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Detalle</th>
                                        <th>Cantidad</th>
                                        <th>Unidad</th>
                                        <th>Frecuencia</th>
                                        <th>Precio de Compra</th>
                                        <th>Precio de Venta</th>
                                        <th>Compra Mesual</th>
                                        <th>Venta Mensual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->mubs as $mub)
                                        <tr>
                                            <td>{{ $mub->detail }}</td>
                                            <td>{{ $mub->amount }}</td>
                                            <td>{{ $mub->unity }}</td>
                                            <td>{{ $mub->frequency }}</td>
                                            <td>{{ $mub->buy }}</td>
                                            <td>{{ $mub->sale }}</td>
                                            <td>{{ $mub->buysMonth }}</td>
                                            <td>{{ $mub->saleMonth }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>{{ $client->mubs->sum('buysMonth') }}</th>
                                        <th>{{ $client->mubs->sum('saleMonth') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    @endif
                    @if ($client->cmub)
                        <div class="row">
                            <div class="col-md-12">
                                <dl class="row">
                                    <dt class="col-md-2">Aclaraci??n</dt>
                                    <dd class="col-md-10">{{ $client->cmub->comentary }}</dd>
                                </dl>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Gastos y Mantenimiento de Vehiculos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gmvCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->gmvs)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Total</th>
                                        <th>Frecuencia</th>
                                        <th>Total Mensual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->gmvs as $gmv)
                                        <tr>
                                            <td>{{ $gmv->item }}</td>
                                            <td>{{ $gmv->amount }}</td>
                                            <td>{{ $gmv->price }}</td>
                                            <td>{{ $gmv->total }}</td>
                                            <td>{{ $gmv->frequency }}</td>
                                            <td>{{ $gmv->totalmes }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th></th>
                                        <th>{{ $client->gmvs->sum('total') }}</th>
                                        <th></th>
                                        <th>{{ $client->gmvs->sum('totalmes') }}</th>
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
                        Personal Percibe Salario Incluye Familia
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ppsifCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->ppsifs)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>N??</th>
                                        <th>Salario</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->ppsifs as $ppsif)
                                        <tr>
                                            <td>{{ $ppsif->item }}</td>
                                            <td>{{ $ppsif->amount }}</td>
                                            <td>{{ $ppsif->salary }}</td>
                                            <td>{{ $ppsif->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th></th>
                                        <th>{{ $client->ppsifs->sum('total') }}</th>
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
                        Detalle de Gastos Fijos Operativos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gfoCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->gfos)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->gfos as $gfo)
                                        <tr>
                                            <td>{{ $gfo->item }}</td>
                                            <td>{{ $gfo->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $client->gfos->sum('total') }}</th>
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
                        Detalle de Gastos Familiares
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gfCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->gfs)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->gfs as $gf)
                                        <tr>
                                            <td>{{ $gf->item }}</td>
                                            <td>{{ $gf->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $client->gfs->sum('total') }}</th>
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
                        Aclaraciones
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cdgCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->cdg)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-2">Aclaraci??n de Gastos Fijos Operativos</dt>
                                    <dd class="col-md-10">{{ $client->cdg->comentaryo }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-2">Aclaraci??n de Gastos Familiares</dt>
                                    <dd class="col-md-10">{{ $client->cdg->comentaryf }}</dd>
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
                        Otros Ingresos
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oiCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->ois)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Decripci??n</th>
                                        <th>Ingreso Bruto</th>
                                        <th>Desc./ Gastos</th>
                                        <th>Total</th>
                                        <th>Aclaraciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->ois as $oi)
                                        <tr>
                                            <td>{{ $oi->item }}</td>
                                            <td>{{ $oi->ib }}</td>
                                            <td>{{ $oi->dg }}</td>
                                            <td>{{ $oi->total }}</td>
                                            <td>{{ $oi->description }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th></th>
                                        <th>{{ $client->gfs->sum('total') }}</th>
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
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Activos Corrientes del Negocio
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#acnCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->acns)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->acns as $acn)
                                        <tr>
                                            <td>{{ $acn->item }}</td>
                                            <td>{{ $acn->value }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $client->acns->sum('value') }}</th>
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
                        Activos Fijos del Negocio
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#afnCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->afns)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->afns as $afn)
                                        <tr>
                                            <td>{{ $afn->item }}</td>
                                            <td>{{ $afn->value }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $client->afns->sum('value') }}</th>
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
                        Otros Activos del Negocio
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oanCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->oans)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->oans as $oan)
                                        <tr>
                                            <td>{{ $oan->item }}</td>
                                            <td>{{ $oan->value }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $client->oans->sum('value') }}</th>
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
                        Activos de la Familia
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#afCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->afs)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->afs as $af)
                                        <tr>
                                            <td>{{ $af->item }}</td>
                                            <td>{{ $af->value }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $client->afs->sum('value') }}</th>
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
                        Otros Activos de la Familia
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oafCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->oafs)
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->oafs as $oaf)
                                        <tr>
                                            <td>{{ $oaf->item }}</td>
                                            <td>{{ $oaf->value }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $client->oafs->sum('value') }}</th>
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
                        Aclaraciones
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cbalCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->cbal)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <dl class="row">
                                    <dt class="col-md-2">Aclaraci??n de Gastos Fijos Operativos</dt>
                                    <dd class="col-md-10">{{ $client->cbal->comentary }}</dd>
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
                        Detalle de Garantia
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ddgCreate">Garantia</button>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#memberCreate">Participante</button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if ($client->ddgs)
                        @foreach ($client->ddgs as $ddg)
                            <div class="row">
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-md-3">Garantia</dt>
                                        <dd class="col-md-9">{{ $ddg->garanty }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl class="row">
                                        <dt class="col-md-6">Valor Comercial</dt>
                                        <dd class="col-md-6">{{ $ddg->vc }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl class="row">
                                        <dt class="col-md-6">Moto Coverturado</dt>
                                        <dd class="col-md-6">{{ $ddg->mc }}</dd>
                                    </dl>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @if ($client->members)
                        @foreach ($client->members as $member)
                            <div class="row">
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-md-3">{{ $member->type }}</dt>
                                        <dd class="col-md-9">{{ $member->name }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-2">
                                    <dl class="row">
                                        <dt class="col-md-6">Ci</dt>
                                        <dd class="col-md-6">{{ $member->ci }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-2">
                                    <dl class="row">
                                        <dt class="col-md-6">Patrimonio total</dt>
                                        <dd class="col-md-6">{{ $member->pt }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-2">
                                    <dl class="row">
                                        <dt class="col-md-6">Covertura</dt>
                                        <dd class="col-md-6">{{ $member->mc }}</dd>
                                    </dl>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Excepciones/Autorizaciones/Justificaciones
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#justificationCreate"><i class="fas fa-plus"></i></button>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if ($client->justifications)
                        @foreach ($client->justifications as $justification)
                            <div class="row">
                                <div class="col-md-5">
                                    <dl class="row">
                                        <dt class="col-md-12">{{ $justification->type }}</dt>
                                    </dl>
                                </div>
                                <div class="col-md-7">
                                    <dl class="row">
                                        <dt class="col-md-2">Justificaci??n</dt>
                                        <dd class="col-md-10">{{ $justification->justification }}</dd>
                                    </dl>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Comentarios y recomendaciones nivel de aprobaci??n
                        @if (!$client->crna)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#crnaCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if ($client->crna)
                        <div class="row">
                            <div class="col-md-12">
                                <dl class="row">
                                    <dt class="col-md-2">Aclaraci??n</dt>
                                    <dd class="col-md-10">{{ $client->crna->aclaration }}</dd>
                                </dl>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Datos generales de la empresa
                        @if (!$client->dge)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#dgeCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if ($client->dge)
                        <div class="row">
                            <div class="col-md-3">
                                <dl class="row">
                                    <dt class="col-md-6">Lugar/Empresa de trabajo</dt>
                                    <dd class="col-md-6">{{ $client->dge->business }}</dd>
                                    <dt class="col-md-6">Fecha de pago de salario</dt>
                                    <dd class="col-md-6">{{ $client->dge->payment }}</dd>
                                    <dt class="col-md-6">Hijos dependientes</dt>
                                    <dd class="col-md-6">{{ $client->dge->son }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-3">
                                <dl class="row">
                                    <dt class="col-md-6">Cargo</dt>
                                    <dd class="col-md-6">{{ $client->dge->position }}</dd>
                                    <dt class="col-md-6">Antiguedad A??os</dt>
                                    <dd class="col-md-6">{{ $client->dge->year }}</dd>
                                    <dt class="col-md-6">Otros dependientes</dt>
                                    <dd class="col-md-6">{{ $client->dge->other }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-3">
                                <dl class="row">
                                    <dt class="col-md-6">Empleador</dt>
                                    <dd class="col-md-6">{{ $client->dge->employer }}</dd>
                                    <dt class="col-md-6">Meses</dt>
                                    <dd class="col-md-6">{{ $client->dge->month }}</dd>
                                    <dt class="col-md-6">Descripci??n</dt>
                                    <dd class="col-md-6">{{ $client->dge->description }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-3">
                                <dl class="row">
                                    <dt class="col-md-6">Fecha de conversaci??n</dt>
                                    <dd class="col-md-6">{{ $client->dge->date }}</dd>
                                    <dt class="col-md-6">Fecha de conversaci??n</dt>
                                    <dd class="col-md-6">{{ $client->dge->date }}</dd>
                                </dl>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">
                        Ingresos corrientes
                        @if (!$client->ico)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#icoCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        @if ($client->iccliente())
                            <div class="col">
                                <label for="">Cliente</label>
                                <table class="table table-sm table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mes</th>
                                            <th>Salario Bruto</th>
                                            <th>Aporte de ley</th>
                                            <th>Otros descuentos</th>
                                            <th>Otros ingresos</th>
                                            <th>Liquido disponibre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($client->iccliente() as $ico)
                                            <tr>
                                                <td>#</td>
                                                <td>{{ $ico->sb }}</td>
                                                <td>{{ $ico->al }}</td>
                                                <td>{{ $ico->od }}</td>
                                                <td>{{ $ico->oi }}</td>
                                                <td>{{ $ico->ld }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Promedio</th>
                                            <th>{{ $client->iccliente()->AVG('sb') }}</th>
                                            <th>{{ $client->iccliente()->AVG('al') }}</th>
                                            <th>{{ $client->iccliente()->AVG('od') }}</th>
                                            <th>{{ $client->iccliente()->AVG('oi') }}</th>
                                            <th>{{ $client->iccliente()->AVG('sb')-$client->iccliente()->AVG('al')-$client->iccliente()->AVG('od')+$client->iccliente()->AVG('oi') }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        @endif
                        @if ($client->icconyuge())
                            <div class="col">
                                <label for="">Conyuge</label>
                                <table class="table table-sm table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mes</th>
                                            <th>Salario Bruto</th>
                                            <th>Aporte de ley</th>
                                            <th>Otros descuentos</th>
                                            <th>Otros ingresos</th>
                                            <th>Liquido disponibre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($client->icconyuge() as $ico)
                                            <tr>
                                                <td>#</td>
                                                <td>{{ $ico->sb }}</td>
                                                <td>{{ $ico->al }}</td>
                                                <td>{{ $ico->od }}</td>
                                                <td>{{ $ico->oi }}</td>
                                                <td>{{ $ico->ld }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Promedio</th>
                                            <th>{{ $client->icconyuge()->AVG('sb') }}</th>
                                            <th>{{ $client->icconyuge()->AVG('al') }}</th>
                                            <th>{{ $client->icconyuge()->AVG('od') }}</th>
                                            <th>{{ $client->icconyuge()->AVG('oi') }}</th>
                                            <th>{{ $client->icconyuge()->AVG('sb')-$client->icconyuge()->AVG('al')-$client->icconyuge()->AVG('od')+$client->icconyuge()->AVG('oi') }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        @endif
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
                        Gastos Corrintes
                        @if (!$client->gcos)
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gcoCreate"><i class="fas fa-plus"></i></button>
                        @endif
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    @if ($client->gcos)
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->gcos as $gco)
                                        <tr>
                                            <td>{{ $gco->item }}</td>
                                            <td>{{ $gco->money }}</td>
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
@endsection

@section('script')

<script>
function domicilio() {
    d=document.getElementById("validDom");
    if (navigator.geolocation){
        // d.innerHTML="<p>Tu dispositivo soporta la geolocalizaci??n.</p>";
        console.log("Tu dispositivo soporta la geolocalizaci??n")
        navigator.geolocation.getCurrentPosition(showPositionDom);
    }
    else {
        // d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaizaci??n.</p>";
        console.log("Lo sentimos, tu dispositivo no admite la geolocaizaci??n")
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
        // d.innerHTML="<p>Tu dispositivo soporta la geolocalizaci??n.</p>";
        console.log("Tu dispositivo soporta la geolocalizaci??n")
        navigator.geolocation.getCurrentPosition(showPositionNeg);
    }
    else {
        // d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaizaci??n.</p>";
        console.log("Lo sentimos, tu dispositivo no admite la geolocaizaci??n")
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
