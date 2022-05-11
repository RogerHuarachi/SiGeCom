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

        <h1>AVALUO BIENES NEGOCIO/FAMILIA</h1>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        (Negocio) Muebles y Enseres
                    </h3>
                </div>

                @if ($client->mueble())
                    <div class="card-body border border-dark p-1">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->mueble() as $work)
                                        <tr>
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
                                        <th>{{ $client->mueble()->sum('value') }}</th>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        (Negocio) Maquinaria y Equipos
                    </h3>
                </div>

                @if ($client->maquinaria())
                    <div class="card-body border border-dark p-1">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->maquinaria() as $work)
                                        <tr>
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
                                        <th>{{ $client->maquinaria()->sum('value') }}</th>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        (Negocio) Mercaderia
                    </h3>
                </div>

                @if ($client->mercaderia())
                    <div class="card-body border border-dark p-1">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
                                        <th>Valor Comercial</th>
                                        <th>Actividad</th>
                                        <th>En Garantia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($client->mercaderia() as $work)
                                        <tr>
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
                                        <th>{{ $client->mercaderia()->sum('value') }}</th>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        (Familia) Muebles y Enseres
                    </h3>
                </div>

                @if ($client->families)
                    <div class="card-body border border-dark p-1">
                        <div class="row table-responsive">
                            <table class="table table-sm table-light">
                                <thead>
                                    <tr>
                                        <th>Cantidad</th>
                                        <th>Descripción de Activo</th>
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
                                        <th>{{ $client->families->sum('value') }}</th>
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
