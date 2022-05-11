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
        
        <h1>DECLARACIÓN PATRIMONIAL</h1>
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
        <div class="col">
            Nombre(s) y Apellido(s) Cliente: {{ $client->name }} {{ $client->lastName }}
        </div>
        <div class="col">
            CI: {{ $client->number }}
        </div>
    </div>
    <div class="row">
        <div class="col">
            Nombre(s) y Apellido(s) Cliente: {{ $codeudor->name }} {{ $codeudor->lastName }}
        </div>
        <div class="col">
            CI: {{ $codeudor->number }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border border-dark">
                    <h3 class="card-title">
                        <strong>Activos</strong>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->assets)
                    <div class="card-body border border-dark">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border border-dark">
                    <h3 class="card-title">
                        <strong>Pasivos</strong>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                @if ($client->passives)
                    <div class="card-body border border-dark">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Tipo de Bien</th>
                                        <th>Cuota Mensual</th>
                                        <th>Saldo Deudor</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->passives as $passive)
                                        <tr>
                                            <td>{{ $passive->creditor }}</td>
                                            <td>{{ $passive->share }}</td>
                                            <td>{{ $passive->balace }}</td>
                                            <td>{{ $passive->state }}</td>
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
            <div class="card">

                <div class="card-body border border-dark p-1">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                Certifico que la información que antecede es fidedigna y autorizo a PROEZA SRL. 
                                recabar toda información confidencial sobre mis antecedentes crediticios, de ingresos 
                                y patrimoniales a la Autoridad de Supervisión del Sistema Financiero,  a realizar la 
                                verificación de datos en el Registro Unico de Identificación (Segip) y/u otras 
                                Instituciones para comprobar y/o complementar la información proporcionada. 
                                Dicha información podrá ser requerida cuantas veces PROEZA SRL. lo considere 
                                necesario en forma previa a la concesión del préstamo, durante su tramitación 
                                y/o una vez concedido el mismo.
                                <br>
                                Los declarantes juramos la exactitud y veracidad de toda la información de Activos y 
                                Pasivos aquí contenida incluyendo los creditos que pudieramos tener en casas de préstamo  
                                y/o de empeño, siendo única y exclusivamente responsabilidad nuestra en calidad de 
                                declarantes la omisión de algún dato u operacion. PROEZA SRL. será tenedor exclusivo 
                                de toda información que obtenga y no estará obligado a emitir la misma, ni a restituir 
                                los antecedentes que se hayan recopilado en el curso de las investigaciones adjuntadas a 
                                esta declaración de bienes. Asimismo, declaramos no estar vinculados al PROEZA SRL., en 
                                ninguna de las formas provistas por ley. En constancia firmo.
                            </p>
                        </div>
                    </div>
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
            <label>Firma de Cliente</label>
        </div>
        <div class="col">
            <label>Firma y Sello del Asesor </label>
        </div>
        <div class="col">
            <label>Firma de Cónyuge</label>
        </div>
    </div>
    <div class="row">
        El suscrito, jura haber realizado la verificación de todos los bienes declarados anteriormente.
    </div>
</body>
</html>
