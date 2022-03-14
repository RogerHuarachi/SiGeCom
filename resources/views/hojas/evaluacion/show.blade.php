@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Evaluación Socio Economica</h1>
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
@include('admin.passives.create')
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
                    @if ($client->sales->count() == 0)
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
                        <table class="table table-sm table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>Item</th>
                                    <th>Monto</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->sales as $sale)
                                    <tr>
                                        <td>{{ $sale->item }}</td>
                                        <td>{{ $sale->money }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('sales.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#saleEdit{{ $sale->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('admin.sales.edit')
                                                @endcan
                                                @can('sales.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#saleDelete{{ $sale->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('admin.sales.delete')
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th>{{ $client->sales->sum('money') }}</th>
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
                                    <th>Opciones</th>
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
                                        <td>
                                            <div class="btn-group">
                                                @can('mubs.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#mubEdit{{ $mub->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('admin.mubs.edit')
                                                @endcan
                                                @can('mubs.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#mubDelete{{ $mub->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('admin.mubs.delete')
                                                @endcan
                                            </div>
                                        </td>
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
                                    <th>Opciones</th>
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
                                        <td>
                                            <div class="btn-group">
                                                @can('gmvs.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#gmvEdit{{ $gmv->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('admin.gmvs.edit')
                                                @endcan
                                                @can('gmvs.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gmvDelete{{ $gmv->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('admin.gmvs.delete')
                                                @endcan
                                            </div>
                                        </td>
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
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->ppsifs as $ppsif)
                                    <tr>
                                        <td>{{ $ppsif->item }}</td>
                                        <td>{{ $ppsif->amount }}</td>
                                        <td>{{ $ppsif->salary }}</td>
                                        <td>{{ $ppsif->total }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('ppsifs.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ppsifEdit{{ $ppsif->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('admin.ppsifs.edit')
                                                @endcan
                                                @can('ppsifs.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ppsifDelete{{ $ppsif->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('admin.ppsifs.delete')
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th>{{ $client->ppsifs->sum('total') }}</th>
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
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->gfos as $gfo)
                                    <tr>
                                        <td>{{ $gfo->item }}</td>
                                        <td>{{ $gfo->total }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('gfos.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#gfoEdit{{ $gfo->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('admin.gfos.edit')
                                                @endcan
                                                @can('gfos.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gfoDelete{{ $gfo->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('admin.gfos.delete')
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td>Gastos Empleados</td>
                                        <td>{{ $client->ppsifs->sum('total') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Gastos y Mantenimiento de Vehiculos</td>
                                        <td>{{ $client->gmvs->sum('totalmes') }}</td>
                                    </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th>{{ $client->gfos->sum('total')+$client->ppsifs->sum('total')+$client->gmvs->sum('totalmes') }}</th>
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
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->gfs as $gf)
                                    <tr>
                                        <td>{{ $gf->item }}</td>
                                        <td>{{ $gf->total }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('gfs.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#gfEdit{{ $gf->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('admin.gfs.edit')
                                                @endcan
                                                @can('gfs.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gfDelete{{ $gf->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('admin.gfs.delete')
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
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
                                    <th>Opciones</th>

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
                                        <td>
                                            <div class="btn-group">
                                                @can('ois.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#oiEdit{{ $oi->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('admin.ois.edit')
                                                @endcan
                                                @can('ois.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#oiDelete{{ $oi->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('admin.ois.delete')
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th>{{ $client->ois->sum('total') }}</th>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Pasivos
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#passiveCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>


            @if ($client->passives)
            <div class="card-body">
                <div class="row">
                    <table class="table table-sm table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>Nombre del Banco</th>
                                <th>Cuota Mensual</th>
                                <th>Saldo Deudor</th>
                                <th>Estado</th>
                                <th>Cuota Final</th>
                                <th>Opciones</th>
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
                                    <td>
                                        <div class="btn-group">
                                            @can('passives.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#passiveEdit{{ $passive->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.passives.edit')
                                            @endcan
                                            @can('passives.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#passiveDelete{{ $passive->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.passives.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Total Activos</th>
                                <th>{{ $client->passives->sum('share') }}</th>
                                <th>{{ $client->passives->sum('balace') }}</th>
                                <th></th>
                                <th>{{ $client->passives->sum('value') }}</th>
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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Estado de Resultados
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
                                    <th>Items</th>
                                    <th>Monto</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ventas</td>
                                    <td>{{ $client->sales->AVG('money')*$client->frec() }}</td>
                                </tr>
                                <tr>
                                    <td>MUB</td>
                                    <td>
                                        @if ($client->mubs->count() != 0)
                                            {{ (($client->mubs->sum('saleMonth')-$client->mubs->sum('buysMonth'))/$client->mubs->sum('saleMonth')*100)}} %
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Costo de Ventas </td>
                                    <td>
                                        @if ($client->mubs->sum('saleMonth') > 0)
                                        {{ (($client->sales->AVG('money')*$client->frec())*(($client->mubs->sum('saleMonth')-$client->mubs->sum('buysMonth'))/$client->mubs->sum('saleMonth')))-( $client->sales->AVG('money')*$client->frec()) }}</td>
                                        @endif
                                </tr>
                                <tr class="bg-dark">
                                    <td>UTILIDAD BRUTA</td>
                                    <td>
                                        @if ($client->mubs->sum('saleMonth') > 0)
                                            {{ ($client->sales->AVG('money')*$client->frec())+((($client->sales->AVG('money')*$client->frec())*(($client->mubs->sum('saleMonth')-$client->mubs->sum('buysMonth'))/$client->mubs->sum('saleMonth')))-( $client->sales->AVG('money')*$client->frec())) }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gastos Fijo Operativos</td>
                                    <td>{{ $client->gfos->sum('total')+$client->ppsifs->sum('total')+$client->gmvs->sum('totalmes') }}</td>
                                </tr>
                                <tr class="bg-dark">
                                    <td>UTILIDAD OPERATIVA</td>
                                    <td>
                                        @if ($client->mubs->sum('saleMonth') > 0)
                                            {{ (($client->sales->AVG('money')*$client->frec())+((($client->sales->AVG('money')*$client->frec())*(($client->mubs->sum('saleMonth')-$client->mubs->sum('buysMonth'))/$client->mubs->sum('saleMonth')))-( $client->sales->AVG('money')*$client->frec())))-($client->gfos->sum('total')+$client->ppsifs->sum('total')+$client->gmvs->sum('totalmes')) }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gastos Familiares</td>
                                    <td>{{ $client->gfs->sum('total') }}</td>
                                </tr>
                                <tr>
                                    <td>Pago Pasivos Mensuales</td>
                                    <td>{{ $client->passives->sum('value') }}</td>
                                </tr>
                                <tr>
                                    <td>Otros Ingresos</td>
                                    <td>{{ $client->ois->sum('total') }}</td>
                                </tr>
                                <tr class="bg-dark">
                                    <td>UTILIDAD NETA DE LA F.E.</td>
                                    <td>
                                        @if ($client->mubs->sum('saleMonth') > 0)
                                            {{ ((($client->sales->AVG('money')*$client->frec())+((($client->sales->AVG('money')*$client->frec())*(($client->mubs->sum('saleMonth')-$client->mubs->sum('buysMonth'))/$client->mubs->sum('saleMonth')))-( $client->sales->AVG('money')*$client->frec())))-($client->gfos->sum('total')+$client->ppsifs->sum('total')+$client->gmvs->sum('totalmes'))-($client->gfs->sum('total'))-($client->passives->sum('value'))+($client->ois->sum('total'))) }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Capacidad de Pago (-20%)</td>
                                    <td>
                                        @if ($client->mubs->sum('saleMonth') > 0)
                                            {{ (((($client->sales->AVG('money')*$client->frec())+((($client->sales->AVG('money')*$client->frec())*(($client->mubs->sum('saleMonth')-$client->mubs->sum('buysMonth'))/$client->mubs->sum('saleMonth')))-( $client->sales->AVG('money')*$client->frec())))-($client->gfos->sum('total')+$client->ppsifs->sum('total')+$client->gmvs->sum('totalmes'))-($client->gfs->sum('total'))-($client->passives->sum('value'))+($client->ois->sum('total'))))*(0.8) }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pago Cuota PROEZA</td>
                                    <td>
                                        @if ($client->loan)
                                            {{ $client->loan->choose }}
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th>
                                        @if ($client->mubs->sum('saleMonth') > 0)
                                            {{ ((((($client->sales->AVG('money')*$client->frec())+((($client->sales->AVG('money')*$client->frec())*(($client->mubs->sum('saleMonth')-$client->mubs->sum('buysMonth'))/$client->mubs->sum('saleMonth')))-( $client->sales->AVG('money')*$client->frec())))-($client->gfos->sum('total')+$client->ppsifs->sum('total')+$client->gmvs->sum('totalmes'))-($client->gfs->sum('total'))-($client->passives->sum('value'))+($client->ois->sum('total'))))*(0.8))-($client->loan->choose) }}
                                        @endif
                                    </th>
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
