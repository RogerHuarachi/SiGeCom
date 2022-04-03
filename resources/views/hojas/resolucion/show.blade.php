@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Resolución</h1>
    </div>
@endsection
@section('content')
{{-- @include('admin.ddgs.create') --}}

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-info p-2">
                <h3 class="card-title">
                    Condiciones del prestamo
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
                <div class="row">
                    <div class="col-md-6">
                        <dl class="row">
                            <dt class="col-md-2">Cliente</dt>
                            <dd class="col-md-10">{{ $client->name }} {{ $client->lastName }}</dd>
                            @if ($codeudor)
                                <dt class="col-md-2">Cliente</dt>
                                <dd class="col-md-10">{{ $codeudor->name }} {{ $codeudor->lastName }}</dd>
                            @endif
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <dl class="row">
                            <dt class="col-md-2">CI</dt>
                            <dd class="col-md-10">{{ $client->number }} {{ $client->extension }}</dd>
                            @if ($codeudor)
                                <dt class="col-md-2">CI</dt>
                                <dd class="col-md-10">{{ $codeudor->number }} {{ $codeudor->extension }}</dd>
                            @endif
                        </dl>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <dl class="row">
                            <dt class="col-md-5">Producto</dt>
                            <dd class="col-md-7">{{ $client->folder->product }}</dd>
                            <dt class="col-md-5">Plazo en meses</dt>
                            <dd class="col-md-7">{{ $client->loan->term }}</dd>
                            <dt class="col-md-5">Tasa de interes anual</dt>
                            <dd class="col-md-7">{{ $client->loan->rate }}</dd>
                            <dt class="col-md-5">Detalle del destino</dt>
                            <dd class="col-md-7">{{ $client->loan->detail }}</dd>
                            @if ($client->folder->rt)
                                <dt class="col-md-5">Riesgo total</dt>
                                <dd class="col-md-7">{{ $client->folder->rt }}</dd>
                            @endif
                        </dl>
                    </div>
                    <div class="col-md-4">
                        <dl class="row">
                            <dt class="col-md-5">Monto Aprobado</dt>
                            <dd class="col-md-7">{{ $client->loan->money }}</dd>
                            <dt class="col-md-5">Numero de cuotas</dt>
                            <dd class="col-md-7">{{ $client->loan->share }} Años</dd>
                            <dt class="col-md-5">Caedec destino</dt>
                            <dd class="col-md-7">constante</dd>
                            <dt class="col-md-5">Tipo de operación</dt>
                            <dd class="col-md-7">{{ $client->folder->operation }}</dd>
                        </dl>
                    </div>
                    <div class="col-md-4">
                        <dl class="row">
                            <dt class="col-md-5">Moneda</dt>
                            <dd class="col-md-7">{{ $client->folder->type }}</dd>
                            <dt class="col-md-5">Frecuencia de pago</dt>
                            <dd class="col-md-7">{{ $client->loan->frequency }}</dd>
                            <dt class="col-md-5">Destino del credito</dt>
                            <dd class="col-md-7">{{ $client->loan->destination }}</dd>
                            @if ($client->folder->mca)
                                <dt class="col-md-5">monto credito anterior</dt>
                                <dd class="col-md-7">{{ $client->folder->mca }}</dd>
                            @endif
                            @if ($client->folder->detail)
                                <dt class="col-md-5">Saldo capital actual</dt>
                                <dd class="col-md-7">{{ $client->folder->sca }}</dd>
                            @endif
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
            <div class="card-header bg-info p-2">
                <h3 class="card-title">
                    Detalle de Garantia
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ddgCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-2">
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
                @if ($garante)
                    <div class="row">
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-4">Garante Personal</dt>
                                <dd class="col-md-8">{{ $garante->name }} {{ $garante->lastName }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-2">
                            <dl class="row">
                                <dt class="col-md-3">CI</dt>
                                <dd class="col-md-9">{{ $garante->number }} {{ $garante->extension }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-3">
                            <dl class="row">
                                <dt class="col-md-6">Patrimonio total</dt>
                                <dd class="col-md-6">{{ number_format($garante->acns->sum('value') +
                                    $garante->afns->sum('value') +
                                    $garante->oans->sum('value') +
                                    $garante->afs->sum('value') +
                                    $garante->oafs->sum('value') -
                                    $garante->passives->sum('balace'), 2, ',', '.') }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-3">
                            <dl class="row">
                                <dt class="col-md-6">Covertura</dt>
                                <dd class="col-md-6">{{ number_format(($garante->acns->sum('value') +
                                    $garante->afns->sum('value') +
                                    $garante->oans->sum('value') +
                                    $garante->afs->sum('value') +
                                    $garante->oafs->sum('value') -
                                    $garante->passives->sum('balace'))/2, 2, ',', '.') }}</dd>
                            </dl>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
