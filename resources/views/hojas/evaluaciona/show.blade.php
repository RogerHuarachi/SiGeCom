@extends('layouts.app')
@section('title')
    <div class="row">
        <h5 class="m-0 pr-1">Evaluación Socio Economica</h5>
    </div>
@endsection
@section('content')
@include('admin.dges.create')
@include('user.icos.cliente')
@include('user.icos.conyuge')
@include('admin.gcos.create')
@include('admin.ois.create')
@include('admin.cbals.create')
@include('user.clients.capacidad')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Datos Generales
                    @if (!$dge)
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#dgeCreate"><i class="fas fa-plus"></i></button>
                    @endif
                    @if ($dge)
                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#dgeEdit{{ $dge->id }}"><i class="fas fa-pen"></i></button>
                        @include('admin.dges.edit')
                    @endif
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($dge)
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-md-3">
                            <dl class="row">
                                <dt class="col-md-6">Lugar/Empresa de trabajo</dt>
                                <dd class="col-md-6">{{ $dge->business }}</dd>
                                <dt class="col-md-6">Fecha de pago de salario</dt>
                                <dd class="col-md-6">{{ $dge->payment }}</dd>
                                <dt class="col-md-6">Hijos dependientes</dt>
                                <dd class="col-md-6">{{ $dge->son }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-3">
                            <dl class="row">
                                <dt class="col-md-6">Cargo</dt>
                                <dd class="col-md-6">{{ $dge->position }}</dd>
                                <dt class="col-md-6">Antiguedad Años</dt>
                                <dd class="col-md-6">{{ $dge->year }}</dd>
                                <dt class="col-md-6">Otros dependientes</dt>
                                <dd class="col-md-6">{{ $dge->other }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-3">
                            <dl class="row">
                                <dt class="col-md-6">Empleador</dt>
                                <dd class="col-md-6">{{ $dge->employer }}</dd>
                                <dt class="col-md-6">Meses</dt>
                                <dd class="col-md-6">{{ $dge->month }}</dd>
                                <dt class="col-md-6">Descripción</dt>
                                <dd class="col-md-6">{{ $dge->description }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-3">
                            <dl class="row">
                                <dt class="col-md-6">Fecha de conversación</dt>
                                <dd class="col-md-6">{{ $dge->date }}</dd>
                                <dt class="col-md-6">Fecha de conversación</dt>
                                <dd class="col-md-6">{{ $dge->date }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Ingresos Corrientes
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#icoclCreate">Cliente</button>
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#icocoCreate">Conyuge</button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
                @if ($client->iccliente())
                            <div class="row">
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
                                            <th>Opc</th>
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
                                                <td>
                                                    <div class="btn-group">
                                                        @can('icos.update')
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#icoEdit{{ $ico->id }}"><i class="fas fa-pen"></i></button>
                                                            @include('admin.icos.edit')
                                                        @endcan
                                                        @can('icos.destroy')
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#icoDelete{{ $ico->id }}"><i class="fas fa-trash-alt"></i></button>
                                                            @include('admin.icos.delete')
                                                        @endcan
                                                    </div>
                                                </td>
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
                            <div class="row">
                                <label for="">Conyugue</label>
                                <table class="table table-sm table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mes</th>
                                            <th>Salario Bruto</th>
                                            <th>Aporte de ley</th>
                                            <th>Otros descuentos</th>
                                            <th>Otros ingresos</th>
                                            <th>Liquido disponibre</th>
                                            <th>Opc</th>
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
                                                <td>
                                                    <div class="btn-group">
                                                        @can('icos.update')
                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#icoEdit{{ $ico->id }}"><i class="fas fa-pen"></i></button>
                                                            @include('admin.icos.edit')
                                                        @endcan
                                                        @can('icos.destroy')
                                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#icoDelete{{ $ico->id }}"><i class="fas fa-trash-alt"></i></button>
                                                            @include('admin.icos.delete')
                                                        @endcan
                                                    </div>
                                                </td>
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
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Gastos Corrientes
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#gcoCreate"><i class="fas fa-plus"></i></button>
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->gcos)
                <div class="card-body p-2">
                    <div class="row">
                        <table class="table table-sm table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>Item</th>
                                    <th>Monto</th>
                                    <th>Opc</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->gcos as $gco)
                                    <tr>
                                        <td>{{ $gco->item }}</td>
                                        <td>{{ $gco->money }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('gcos.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#gcoEdit{{ $gco->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('admin.gcos.edit')
                                                @endcan
                                                @can('gcos.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gcoDelete{{ $gco->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('admin.gcos.delete')
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th>{{ $client->gcos->sum('money') }}</th>
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
    <div class="col-6">
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
    <div class="col-6">
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Estado de Resultados
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cpEdit{{ $client->id }}"><i class="fas fa-plus"></i></button>
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
                        <tbody>
                            <tr>
                                <td>Ingresos Corrientes Cliente</td>
                                <td class="text-right">
                                    {{ number_format($client->iccl($client->id), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Ingresos Corrientes Conyugue</td>
                                <td class="text-right">
                                    {{ number_format($client->icco($client->id), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Otros Ingresos</td>
                                <td class="text-right">
                                    {{ number_format($client->ois->sum('total'), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr class="bg-secondary">
                                <td>Total Ingresos Disponibles</td>
                                <td class="text-right">
                                    {{ number_format(($client->iccl($client->id))+($client->icco($client->id))+($client->ois->sum('total')), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Gastos</td>
                                <td class="text-right">
                                    {{ number_format($client->gcos->sum('money'), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr class="bg-secondary">
                                <td>Total Gastos</td>
                                <td class="text-right">
                                    {{ number_format($client->gcos->sum('money'), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Gastos/Ingresos</td>
                                <td class="text-right">
                                    {{ number_format($client->gsi($client->id), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Capacidad de Pago</td>
                                <td class="text-right">
                                    {{ $client->cp }}
                                </td>
                            </tr>
                            <tr class="bg-secondary">
                                <td>Disponibilidad Para Pago</td>
                                <td class="text-right">
                                    {{ number_format((($client->iccl($client->id))+($client->icco($client->id))+($client->ois->sum('total')))*$client->cp, 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Pago Pasivos Mensuales</td>
                                <td class="text-right">
                                    {{ number_format($client->passives->sum('value'), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Cuota Maxima</td>
                                <td class="text-right">
                                    {{ number_format(((($client->iccl($client->id))+($client->icco($client->id))+($client->ois->sum('total')))*$client->cp)-($client->passives->sum('value')), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr>
                                <td>Cuota Proeza</td>
                                <td class="text-right">
                                    {{ $client->loan->choose }}
                                </td>
                            </tr>
                            <tr>
                                <td>Excedente en Capacidad de Pago</td>
                                <td class="text-right">
                                    {{ number_format((((($client->iccl($client->id))+($client->icco($client->id))+($client->ois->sum('total')))*$client->cp)-($client->passives->sum('value')))-($client->loan->choose), 2, ',', '.') }}
                                </td>
                            </tr>
                            <tr class="bg-secondary">
                                <td>Excedente Ingresos Disponibles</td>
                                <td class="text-right">
                                    {{ number_format((($client->iccl($client->id))+($client->icco($client->id))+($client->ois->sum('total')))-($client->gcos->sum('money'))-($client->passives->sum('value'))-($client->loan->choose), 2, ',', '.') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-info p-1 pl-2 pr-2">
                <h4 class="card-title">
                    Aclaraciones
                    @if (!$cbal)
                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#cbalCreate"><i class="fas fa-plus"></i></button>
                    @endif
                    @if ($cbal)
                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cbalEdit{{ $cbal->id }}"><i class="fas fa-pen"></i></button>
                        @include('admin.cbals.edit')
                    @endif
                </h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
                @if ($cbal)
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dd class="col-md-12">{{ $cbal->comentary }}</dd>
                            </dl>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
