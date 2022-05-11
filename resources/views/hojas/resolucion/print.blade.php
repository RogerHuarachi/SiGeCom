<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PROEZA | SiGeCCO</title>
    
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body>
    <div class="row justify-content-center pb-3">
        {{-- <label>PLANILLA CONSOLIDADA DE CAJA</label> --}}
        
        <h1>RESOLUCIÓN DE PRÉSTAMO</h1>
    </div>
    <div class="row justify-content-center m-0">
        <div class="col-2">
            <div class="row justify-content-center m-0">
                <img class="" src="{{ asset('dist/img/proeza.jpg') }}"  width="120">
            </div>
        </div>
        <div class="col-3">
            <dl class="row">
                <dt class="col-sm-4">Ciudad:</dt>
                <dd class="col-sm-8">
                    {{ $client->folder->user->agency->city->name }}
                </dd>
                <dt class="col-sm-4">Agencia:</dt>
                <dd class="col-sm-8">
                    {{ $client->folder->user->agency->name }}
                </dd>
                <dt class="col-sm-4">Responsable:</dt>
                <dd class="col-sm-8">
                    {{ $client->folder->user->name }}
                </dd>
            </dl>
        </div>
        <div class="col-2">
            <dl class="row">
                <dt class="col-sm-4">Fecha:</dt>
                <dd class="col-sm-8">
                    {{ date_format($client->created_at, 'd-M-Y') }}
                </dd>
                <dt class="col-sm-4">T.C.:</dt>
                <dd class="col-sm-8">
                    {{ $client->folder->type }}
                </dd>
            </dl>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border border-dark">
                    <h3 class="card-title">
                        <strong>Condiciones del prestamo</strong>
                    </h3>
                </div>

                <div class="card-body border border-dark">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-2">Cliente</dt>
                                <dd class="col-md-10">{{ $client->name }} {{ $client->lastName }}</dd>
                                @if ($codeudor)
                                    <dt class="col-md-2">Conyuge</dt>
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
                <div class="card-header border border-dark">
                    <h3 class="card-title">
                        <strong>Detalle de Garantia</strong>
                    </h3>
                </div>

                <div class="card-body border border-dark">
                    <div class="row">
                        @if ($client->ddgs)
                            <div class="col-12">
                                @foreach ($client->ddgs as $ddg)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <dl class="row m-0">
                                                <dt class="col-md-4">Garantia</dt>
                                                <dd class="col-md-8">{{ $ddg->garanty }}</dd>
                                            </dl>
                                        </div>
                                        <div class="col-md-3">
                                            <dl class="row m-0">
                                                <dt class="col-md-5">Valor Comercial</dt>
                                                <dd class="col-md-7">{{ $ddg->vc }}</dd>
                                            </dl>
                                        </div>
                                        <div class="col-md-3">
                                            <dl class="row m-0">
                                                <dt class="col-md-5">Moto Coverturado</dt>
                                                <dd class="col-md-7">{{ $ddg->mc }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        @if ($client->members)
                            <div class="col-12">
                                @foreach ($client->members as $member)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <dl class="row m-0">
                                                <dt class="col-md-6">{{ $member->type }}</dt>
                                                <dd class="col-md-6">{{ $member->name }}</dd>
                                            </dl>
                                        </div>
                                        <div class="col-md-2">
                                            <dl class="row m-0">
                                                <dt class="col-md-5">CI</dt>
                                                <dd class="col-md-7">{{ $member->ci }}</dd>
                                            </dl>
                                        </div>
                                        <div class="col-md-3">
                                            <dl class="row m-0">
                                                <dt class="col-md-5">Patrimonio total</dt>
                                                <dd class="col-md-7">{{ number_format($member->pt, 2, ',', '.') }}</dd>
                                            </dl>
                                        </div>
                                        <div class="col-md-3">
                                            <dl class="row m-0">
                                                <dt class="col-md-5">Covertura</dt>
                                                <dd class="col-md-7">{{ number_format($member->mc, 2, ',', '.') }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border border-dark">
                    <h3 class="card-title">
                        <strong>Excepciones/Autorizaciones/Justificaciones</strong>
                    </h3>
                </div>

                <div class="card-body border border-dark">
                    @if ($client->justifications)
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <th>Excepción</th>
                                    <th>Justificación</th>
                                </thead>
                                <tbody>
                                    @foreach ($client->justifications as $justification)
                                        <tr>
                                            <td>{{ $justification->type }}</td>
                                            <td>{{ $justification->justification }}</td>
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border border-dark">
                    <h3 class="card-title">
                        <strong>Comentarios y recomendaciones nivel de aprobación</strong>
                    </h3>
                </div>

                <div class="card-body border border-dark">
                    @if ($crna)
                        <div class="row">
                            <div class="col-md-12">
                                <dl class="row">
                                    <dd class="col-md-10">{{ $crna->aclaration }}</dd>
                                </dl>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>



    <br>
    <br>
    <br>
    <br>
    <div class="row text-center">
        <div class="col">
            <label>_________________________</label>
        </div>
        <div class="col">
            <label>_________________________</label>
        </div>
        <div class="col">
            <label>_________________________</label>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <label>Asesor de Créditos/Pasante</label>
        </div>
        <div class="col">
            <label>Aprobación Agencia</label>
        </div>
        <div class="col">
            <label>Aprobación Nacional</label>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
        {{ date('d-M-Y') }}
        </div>
        <div class="col">
            {{ date('d-M-Y') }}
        </div>
        <div class="col">
            {{ date('d-M-Y') }}
            {{-- <label>{{ $client->folder->user->name }}</label> --}}
        </div>
    </div>
</body>
</html>
