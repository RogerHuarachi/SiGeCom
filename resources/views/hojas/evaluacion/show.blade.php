@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Solicitud de Préstamo</h1>
    </div>
@endsection
@section('content')
@include('admin.children.create')
@include('admin.payments.create')
@include('admin.debts.create')
@include('admin.days.sub.diario')
@include('admin.weeks.sub.semana')
@include('admin.months.sub.mes')
@include('admin.mubs.create')
@include('admin.gmvs.create')
@include('admin.ppsifs.create')
@include('admin.gfos.create')
@include('admin.gfs.create')
@include('admin.ois.create')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Descripcion de la unidad familiar
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#childCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Comportamiento de Pago
                    @if (!$client->payment)
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#paymentCreate"><i class="fas fa-plus"></i></button>
                    @endif
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Endeudamiento en otras instituciones
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#debtCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Comportamiento de Ventas
                    @if (!$client->sales)
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#dayCreate">Diario</button>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#weekCreate">Semanal</button>
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#monthCreate">Mensual</button>
                    @else
                        @if ($client->dia())
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#dayCreate">Diario</button>
                        @endif
                        @if ($client->semana())
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#weekCreate">Semanal</button>
                        @endif
                        @if ($client->mes())
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#monthCreate">Mensual</button>
                        @endif
                    @endif
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    MUB
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#mubCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->mubs)
                <div class="card-body">
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
                    Gastos y Mantenimiento de Vehiculos
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gmvCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Personal Percibe Salario Incluye Familia
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ppsifCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
                                    <th>N°</th>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Detalle de Gastos Fijos Operativos
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gfoCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Detalle de Gastos Familiares
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gfCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Otros Ingresos
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oiCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->ois)
                <div class="card-body">
                    <div class="row">
                        <table class="table table-sm table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>Decripción</th>
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
@endsection
