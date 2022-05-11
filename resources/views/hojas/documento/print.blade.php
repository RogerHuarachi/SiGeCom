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

        <h1>FORMULARIO DE RECEPCIÓN DE DOCUMENTOS</h1>
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
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        Recepcion de Documentos
                    </h3>
                </div>

                @if ($client->inmueble())
                    <div class="card-body border border-dark p-1">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>N° Doc</th>
                                        <th>N° FOjas</th>
                                        <th>Observacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->inmueble() as $document)
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        Recepcion de Documentos
                    </h3>
                </div>

                @if ($client->vehiculo())
                    <div class="card-body border border-dark p-1">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>N° Doc</th>
                                        <th>N° FOjas</th>
                                        <th>Observacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->vehiculo() as $document)
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
