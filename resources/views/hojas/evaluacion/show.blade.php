@extends('layouts.app')
@section('title')
    <div class="row">
        <h5 class="m-0 pr-1">Evaluación Socio Economica</h5>
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
@include('admin.cmubs.create')
@include('admin.gmvs.create')
@include('admin.ppsifs.create')
@include('admin.gfos.create')
@include('admin.gfs.create')
@include('admin.ois.create')
@include('admin.cdgs.create')
@include('admin.passives.create')
@include('admin.acns.create')
@include('admin.afns.create')
@include('admin.oans.create')
@include('admin.afs.create')
@include('admin.oafs.create')
@include('admin.cbals.create')
<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Descripcion de la unidad familiar
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#childCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->children)
                <div class="card-body p-2">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-sm table-light">
                                <thead class="text-center">
                                    <tr>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Estudia</th>
                                        <th>Donde</th>
                                        <th>Tipo de Ent</th>
                                        <th>Otras Act</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
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
                </div>
            @endif
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Comportamiento de Pago
                    @if (!$client->payment)
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#paymentCreate"><i class="fas fa-plus"></i></button>
                    @endif
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
                @if ($client->payment)
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dt class="col-md-4">Proeza Atrasos</dt>
                                <dd class="col-md-8">{{ $client->payment->proeza }}</dd>
                                <dt class="col-md-4">Razon</dt>
                                <dd class="col-md-8">{{ $client->payment->obs1 }}</dd>
                                <dt class="col-md-4">Obs BIC</dt>
                                <dd class="col-md-8">{{ $client->payment->bic }}</dd>
                                <dt class="col-md-4">Razon</dt>
                                <dd class="col-md-8">{{ $client->payment->obs2 }}</dd>
                            </dl>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Endeudamiento en otras inst.
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#debtCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->debts)
                <div class="card-body p-2">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-sm table-light">
                                <thead class="text-center">
                                    <tr>
                                        <th>Entidad</th>
                                        <th>Calificacion</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($client->debts as $debt)
                                        <tr>
                                            <td>{{ $debt->entity }}</td>
                                            <td>{{ $debt->qualification }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
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
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->sales)
                <div class="card-body p-2">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-sm table-light">
                                <thead class="text-center">
                                    <tr>
                                        <th>Item</th>
                                        <th>Monto</th>
                                        <th>Opc</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
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
                                <tfoot class="text-center">
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $client->sales->sum('money') }}</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    MUB
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#mubCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
                @if ($client->mubs)
                    <div class="row">
                        <table class="table table-sm table-light">
                            <thead class="text-center">
                                <tr>
                                    <th>Detalle</th>
                                    <th>Cant</th>
                                    <th>Uni</th>
                                    <th>Frec</th>
                                    <th>P.C.</th>
                                    <th>P.V.</th>
                                    <th>Compra Men</th>
                                    <th>Venta Men</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                            <tfoot class="text-center">
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
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Aclaraciones
                    @if (!$client->cmub)
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cmubCreate"><i class="fas fa-plus"></i></button>
                    @endif
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
                @if ($client->cmub)
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dd class="col-md-12">{{ $client->cmub->comentary }}</dd>
                            </dl>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Gastos y Mantenimiento de Vehiculos
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gmvCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->gmvs)
                <div class="card-body p-2">
                    <div class="row">
                        <table class="table table-sm table-light">
                            <thead class="text-center">
                                <tr>
                                    <th>Item</th>
                                    <th>Can</th>
                                    <th>P.U.</th>
                                    <th>Total</th>
                                    <th>Frec</th>
                                    <th>Total Men</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                            <tfoot class="text-center">
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Personal Percibe Salario Incluye Familia
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ppsifCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->ppsifs)
                <div class="card-body p-2">
                    <div class="row">
                        <table class="table table-sm table-light">
                            <thead class="text-center">
                                <tr>
                                    <th>Item</th>
                                    <th>N°</th>
                                    <th>Salario</th>
                                    <th>Total</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                            <tfoot class="text-center">
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
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Detalle de Gastos Fijos Operativos
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gfoCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->gfos)
                <div class="card-body p-2">
                    <div class="row">
                        <table class="table table-sm table-light">
                            <thead class="text-center">
                                <tr>
                                    <th>Item</th>
                                    <th>Total</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                            <tfoot class="text-center">
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
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Detalle de Gastos Familiares
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gfCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->gfs)
                <div class="card-body p-2">
                    <div class="row">
                        <table class="table table-sm table-light">
                            <thead class="text-center">
                                <tr>
                                    <th>Item</th>
                                    <th>Total</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
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
                            <tfoot class="text-center">
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
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Aclaraciones
                    @if (!$client->cdg)
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cdgCreate"><i class="fas fa-plus"></i></button>
                    @endif
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
                @if ($client->cdg)
                    <div class="row">
                        <div class="col-md-12">
                                <dt>Gastos Fijos Operativos</dt>
                            <dl class="row">
                                <dd class="col-md-12">{{ $client->cdg->comentaryo }}</dd>
                            </dl>
                                <dt>Gastos Familiares</dt>
                            <dl class="row">
                                <dd class="col-md-12">{{ $client->cdg->comentaryf }}</dd>
                            </dl>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Estado de Resultados
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oiCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->ois)
                <div class="card-body p-2">
                    <div class="row">
                        <table class="table table-sm table-light">
                            <tbody>
                                <tr>
                                    <td>Ventas</td>
                                    <td class="text-right">
                                        {{ number_format($client->ventas($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>MUB</td>
                                    <td class="text-right">
                                        {{ number_format($client->mub($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Costo de Ventas </td>
                                    <td class="text-right">
                                        {{ number_format($client->costoventas($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="bg-secondary">
                                    <td>UTILIDAD BRUTA</td>
                                    <td class="text-right">
                                        {{ number_format($client->utilidadbruta($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gastos Fijo Operativos</td>
                                    <td class="text-right">
                                        {{ number_format($client->gfo($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="bg-secondary">
                                    <td>UTILIDAD OPERATIVA</td>
                                    <td class="text-right">
                                        {{ number_format($client->utilidadoperativa($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gastos Familiares</td>
                                    <td class="text-right">
                                        {{ number_format($client->gfs->sum('total'), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pago Pasivos Mensuales</td>
                                    <td class="text-right">
                                        {{ number_format($client->passives->sum('value'), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Otros Ingresos</td>
                                    <td class="text-right">
                                        {{ number_format($client->ois->sum('total'), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="bg-secondary">
                                    <td>UTILIDAD NETA DE LA F.E.</td>
                                    <td class="text-right">
                                        {{ number_format($client->utilidadneta($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Capacidad de Pago (-20%)</td>
                                    <td class="text-right">
                                        {{ number_format($client->capacidad($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pago Cuota PROEZA</td>
                                    <td class="text-right">
                                        @if ($client->loan)
                                            {{ $client->loan->choose }}
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <td class="text-right">
                                        {{ number_format($client->excedente($client->id), 2, ',', '.') }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info p-1 pl-2 pr-2">
                        <h4 class="card-title">
                            Otros Ingresos
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oiCreate"><i class="fas fa-plus"></i></button>
                        </h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    @if ($client->ois)
                        <div class="card-body p-2">
                            <div class="row">
                                <table class="table table-sm table-light">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Decripción</th>
                                            <th>Ingreso Bruto</th>
                                            <th>Desc./ Gastos</th>
                                            <th>Total</th>
                                            <th>Aclaraciones</th>
                                            <th>Opc</th>

                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
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
                                    <tfoot class="text-center">
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
                    <div class="card-header bg-info p-1 pl-2 pr-2">
                        <h4 class="card-title">
                            Pasivos
                        </h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>


                    @if ($client->passives)
                    <div class="card-body p-2">
                        <div class="row">
                            <table class="table table-sm table-light">
                                <thead class="text-center">
                                    <tr>
                                        <th>Nombre del Banco</th>
                                        <th>Cuota Mensual</th>
                                        <th>Saldo Deudor</th>
                                        <th>Estado</th>
                                        <th>Cuota Final</th>
                                        <th>Opc</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
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
                                <tfoot class="text-center">
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
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Balance General
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
                <div class="row">
                    <table class="table table-sm table-light">
                        <thead class="text-center">
                            <tr>
                                <th>Activos Fami-Empresa</th>
                                <th class="text-right">{{ number_format($client->acns->sum('value') +
                                    $client->afns->sum('value') +
                                    $client->oans->sum('value') +
                                    $client->afs->sum('value') +
                                    $client->oafs->sum('value'), 2, ',', '.') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-dark">
                                <td>Activos del Negocio</td>
                                <td class="text-right">{{ number_format($client->acns->sum('value') +
                                    $client->afns->sum('value') +
                                    $client->oans->sum('value'), 2, ',', '.') }}</td>
                            </tr>
                            <tr class="bg-secondary">
                                <td>Corrientes del Negocio <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#acnCreate"><i class="fas fa-plus"></i></button></td>
                                <td class="text-center">{{ number_format($client->acns->sum('value'), 2, ',', '.') }}</td>
                            </tr>
                            @if ($client->acns)
                                @foreach ($client->acns as $acn)
                                    <tr>
                                        <td>{{ $acn->item }}</td>
                                        <td>{{ number_format($acn->value, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr class="bg-secondary">
                                <td>Activos Fijos del Negocio <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#afnCreate"><i class="fas fa-plus"></i></button></td>
                                <td class="text-center">{{ number_format($client->afns->sum('value'), 2, ',', '.') }}</td>
                            </tr>
                            @if ($client->afns)
                                @foreach ($client->afns as $afn)
                                    <tr>
                                        <td>{{ $afn->item }}</td>
                                        <td>{{ number_format($afn->value, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr class="bg-secondary">
                                <td>Otros Activos del Negocio <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oanCreate"><i class="fas fa-plus"></i></button></td>
                                <td class="text-center">{{ number_format($client->oans->sum('value'), 2, ',', '.') }}</td>
                            </tr>
                            @if ($client->oans)
                                @foreach ($client->oans as $oan)
                                    <tr>
                                        <td>{{ $oan->item }}</td>
                                        <td>{{ number_format($oan->value, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr class="bg-dark">
                                <td>Activos de la Familia</td>
                                <td class="text-right">{{ number_format($client->afs->sum('value') + $client->oafs->sum('value'), 2, ',', '.') }}</td>
                            </tr>
                            <tr class="bg-secondary">
                                <td>Activos de la Familia <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#afCreate"><i class="fas fa-plus"></i></button></td>
                                <td class="text-center">{{ number_format($client->afs->sum('value'), 2, ',', '.') }}</td>
                            </tr>
                            @if ($client->afs)
                                @foreach ($client->afs as $af)
                                    <tr>
                                        <td>{{ $af->item }}</td>
                                        <td>{{ number_format($af->value, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr class="bg-secondary">
                                <td>Otros Activos de la Familia <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oafCreate"><i class="fas fa-plus"></i></button></td>
                                <td class="text-center">{{ number_format($client->oafs->sum('value'), 2, ',', '.') }}</td>
                            </tr>
                            @if ($client->oafs)
                                @foreach ($client->oafs as $oaf)
                                    <tr>
                                        <td>{{ $oaf->item }}</td>
                                        <td>{{ number_format($oaf->value, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <table class="table table-sm table-light">
                        <thead class="text-center">
                            <tr>
                                <th>Pasivos Fami-Empresa</th>
                                <th>{{ number_format($client->passives->sum('balace'), 2, ',', '.') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($client->passives)
                                <tr>
                                    <td>Saldo deudor según DDJJ deudas Directas</td>
                                    <td class="text-center">{{ number_format($client->passives->sum('balace'), 2, ',', '.') }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <table class="table table-sm table-light">
                        <thead class="text-center bg-dark">
                            <tr>
                                <th>Patrimonio de la Fami-Empresa</th>
                                <th>{{ number_format($client->acns->sum('value') +
                                    $client->afns->sum('value') +
                                    $client->oans->sum('value') +
                                    $client->afs->sum('value') +
                                    $client->oafs->sum('value') -
                                    $client->passives->sum('balace'), 2, ',', '.') }}
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info p-1 pl-2 pr-2">
                        <h4 class="card-title">
                            Indicadores y Cruces de Variables
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#oiCreate"><i class="fas fa-plus"></i></button>
                        </h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-md-12">
                                <dl class="row">
                                    <dt class="col-md-5">Liquidez del Negocio Vs. Crédito Solicitado</dt>
                                    <dd class="col-md-7">
                                        @if ($client->loan)
                                            {{ number_format($client->acns->sum('value') / $client->loan->money, 2, ',', '.') }}
                                        @endif
                                    </dd>

                                    <dt class="col-md-5">Capital de Trabajo Vs. Costo de Ventas</dt>
                                    <dd class="col-md-7">
                                        @if ($client->costoventas($client->id) != 0)
                                            {{ number_format($client->acns->sum('value') / -$client->costoventas($client->id), 2, ',', '.') }} Meses
                                        @endif
                                    </dd>

                                    <dt class="col-md-5">Gastos Operativos Vs. Utilidad Bruta</dt>
                                    <dd class="col-md-7">{{ number_format($client->goub($client->id)*100, 2, ',', '.') }} %</dd>

                                    <dt class="col-md-5">Gastos Familiares Vs. Utilidad Bruta</dt>
                                    <dd class="col-md-7">{{ number_format($client->gfub($client->id)*100, 2, ',', '.') }} %</dd>

                                    <dt class="col-md-5">Relación Patrimonial Vs. Crédito Solicitado</dt>
                                    <dd class="col-md-7">
                                    @if ($client->loan)
                                        {{ number_format((($client->acns->sum('value') +
                                        $client->afns->sum('value') +
                                        $client->oans->sum('value') +
                                        $client->afs->sum('value') +
                                        $client->oafs->sum('value') -
                                        $client->passives->sum('balace')) / $client->loan->money), 2, ',', '.') }} A 1 (mínimo 3 a 1)
                                    @endif
                                    </dd>

                                    <dt class="col-md-5">Otros ingresos  Vs.  Utilidad Neta F.E.</dt>
                                    <dd class="col-md-7">{{ number_format($client->oiun($client->id)*100, 2, ',', '.') }} %</dd>

                                    <dt class="col-md-5">Endeudamiento Total de la Famiempresa (menor al 50%) </dt>
                                    <dd class="col-md-7">
                                        @if (($client->acns->sum('value') + $client->afns->sum('value') + $client->oans->sum('value') + $client->afs->sum('value') + $client->oafs->sum('value')) != 0)
                                        {{ number_format(($client->passives->sum('balace')+
                                        $client->loan->money)/
                                        ($client->acns->sum('value') +
                                        $client->afns->sum('value') +
                                        $client->oans->sum('value') +
                                        $client->afs->sum('value') +
                                        $client->oafs->sum('value'))*100, 2, ',', '.') }} %
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
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info p-1 pl-2 pr-2">
                        <h4 class="card-title">
                            Aclaraciones
                            @if (!$client->cbal)
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cbalCreate"><i class="fas fa-plus"></i></button>
                            @endif
                        </h4>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body p-2">
                        @if ($client->cbal)
                            <div class="row">
                                <div class="col-md-12">
                                    <dl class="row">
                                        <dd class="col-md-12">{{ $client->cbal->comentary }}</dd>
                                    </dl>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
