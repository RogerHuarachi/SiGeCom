<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PROEZA | SiGeCom</title>

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
            He recibido los documentos originales del 
            @if ($client->inmueble()->count())
                <strong>Inmueble</strong>
            @else
                <strong>Vehiculo</strong>
            @endif
            de propiedad de (los) señor (es): <strong>{{ $client->name }} {{ $client->lastName }}</strong> 
            que son entregados de forma voluntaria para garantiar el credito solicitado en la Institución Proeza SRL.
            <br>
            La documentacion entregada se encuentra detallada a continuación:
        </div>
    </div>

    @if ($client->inmueble()->count())
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border border-dark">
                        <h3 class="card-title">
                            <strong>DETALLE DE LA DOCUMENTACION  DE INMUEBLE</strong>
                        </h3>
                    </div>

                    <div class="card-body border border-dark">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>N° Doc</th>
                                        <th>N° Fojas</th>
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
                </div>
            </div>
        </div>
    @endif
    
    @if ($client->vehiculo()->count())
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border border-dark">
                        <h3 class="card-title">
                            <strong>DETALLE DE LA DOCUMENTACION  DE VEHICULO</strong>
                        </h3>
                    </div>

                    <div class="card-body border border-dark">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>N° Doc</th>
                                        <th>N° Fojas</th>
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
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border border-dark">
                    <h3 class="card-title">
                        <strong>RECEPCIÓN DE DOCUMENTOS</strong>
                    </h3>
                </div>

                <div class="card-body border border-dark">
                    <br>
                    <br>
                    <br>
                    <br>
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
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <label>{{ $client->name }} {{ $client->lastName }}</label>
                        </div>
                        <div class="col">
                            <label>{{ $client->folder->user->name }}</label>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            Entregué Conforme
                        </div>
                        <div class="col">
                            Recibí Conforme
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border border-dark">
                    <h3 class="card-title">
                        <strong>DEVOLUCIÓN DE DOCUMENTOS</strong>
                    </h3>
                </div>

                <div class="card-body border border-dark">
                    <div class="row">
                        En {{ $client->folder->user->agency->city->name }} en fecha _______  de ________________ del ___________ he  recibido 
                        toda la documentación a mi entera conformidad sin ninguna observación.
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
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
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <label>{{ $client->name }} {{ $client->lastName }}</label>
                        </div>
                        <div class="col">
                            <label>{{ $client->folder->user->name }}</label>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            Recibí Conforme
                        </div>
                        <div class="col">
                            Entregué Conforme
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
