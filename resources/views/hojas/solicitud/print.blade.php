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
        
        <h1>SOLICITUD DE PRÉSTAMO</h1>
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
                        <strong>Datos del {{ $client->type }}</strong>
                    </h3>
                </div>
                <div class="card-body border border-dark p-1">
                    <div class="row">
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Nombres y Apellidos</dt>
                                <dd class="col-md-7">{{ $client->name }} {{ $client->lastName }}</dd>
                                <dt class="col-md-5">Doc. de Identidad</dt>
                                <dd class="col-md-7">{{ $client->identification }}</dd>
                                <dt class="col-md-5">Edad</dt>
                                <dd class="col-md-7">{{ $client->age }} Años</dd>
                                <dt class="col-md-5">Telefono Movil</dt>
                                <dd class="col-md-7">{{ $client->mobile }}</dd>
                                <dt class="col-md-5">Situación Laboral</dt>
                                <dd class="col-md-7">{{ $client->employment }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Sexo</dt>
                                <dd class="col-md-7">{{ $client->gender }}</dd>
                                <dt class="col-md-5">N° de Documento</dt>
                                <dd class="col-md-7">{{ $client->number }} {{ $client->extension }}</dd>
                                <dt class="col-md-5">Estado Civil</dt>
                                <dd class="col-md-7">{{ $client->civil }}</dd>
                                <dt class="col-md-5">Telefono Fijo</dt>
                                <dd class="col-md-7">
                                    @if ($client->landline)
                                        {{ $client->landline }}
                                    @else
                                        --
                                    @endif
                                <dt class="col-md-5">Actividad Primaria</dt>
                                <dd class="col-md-7">{{ $client->mainActivity }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-4">
                            <dl class="row">
                                <dt class="col-md-5">Fecha de Nacimiento</dt>
                                <dd class="col-md-7">{{ $client->birth }}</dd>
                                <dt class="col-md-5">Nacionalidad</dt>
                                <dd class="col-md-7">{{ $client->nacionality }}</dd>
                                <dt class="col-md-5">N° de Dependientes</dt>
                                <dd class="col-md-7">
                                    @if ($client->dependents)
                                        {{ $client->dependents }}
                                    @else
                                        --
                                    @endif
                                </dd>
                                <dt class="col-md-5">NIT</dt>
                                <dd class="col-md-7">
                                    @if ($client->nit)
                                        {{ $client->nit }}
                                    @else
                                        --
                                    @endif
                                </dd>
                                <dt class="col-md-5">Actividad Secundaria</dt>
                                <dd class="col-md-7">
                                    @if ($client->secondaryActivity)
                                        {{ $client->secondaryActivity }}
                                    @else
                                        --
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        <strong>Referencia Personal</strong>
                    </h3>
                </div>
                @if ($personal)
                    <div class="card-body border border-dark p-1">
                        <div class="row">
                            <div class="col-md-7">
                                <dl class="row">
                                    <dt class="col-md-3">Nombre</dt>
                                    <dd class="col-md-9">{{ $personal->name }}</dd>
                                    <dt class="col-md-3">Direccion</dt>
                                    <dd class="col-md-9">{{ $personal->address }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-5">
                                <dl class="row">
                                    <dt class="col-md-5">Vinculo</dt>
                                    <dd class="col-md-7">{{ $personal->link }}</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $personal->mobile }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        <strong>Referencia Comercial</strong>
                    </h3>
                </div>

                @if ($client->commercial)
                    <div class="card-body border border-dark p-1">
                        <div class="row">
                            <div class="col-md-7">
                                <dl class="row">
                                    <dt class="col-md-3">Nombre</dt>
                                    <dd class="col-md-9">{{ $client->commercial->name }}</dd>
                                    <dt class="col-md-3">Direccion</dt>
                                    <dd class="col-md-9">{{ $client->commercial->address }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-5">
                                <dl class="row">
                                    <dt class="col-md-5">Vinculo</dt>
                                    <dd class="col-md-7">{{ $client->commercial->link }}</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $client->commercial->mobile }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @if ($codebtor)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border border-dark p-2">
                        <h3 class="card-title">
                            <strong>Datos del {{ $codebtor->type }}</strong>
                        </h3>
                    </div>
                    <div class="card-body border border-dark p-1">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Nombres y Apellidos</dt>
                                    <dd class="col-md-7">{{ $codebtor->name }} {{ $codebtor->lastName }}</dd>
                                    <dt class="col-md-5">Doc. de Identidad</dt>
                                    <dd class="col-md-7">{{ $codebtor->identification }}</dd>
                                    <dt class="col-md-5">Edad</dt>
                                    <dd class="col-md-7">{{ $codebtor->age }} Años</dd>
                                    <dt class="col-md-5">Telefono Movil</dt>
                                    <dd class="col-md-7">{{ $codebtor->mobile }}</dd>
                                    <dt class="col-md-5">Situación Laboral</dt>
                                    <dd class="col-md-7">{{ $codebtor->employment }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Sexo</dt>
                                    <dd class="col-md-7">{{ $codebtor->gender }}</dd>
                                    <dt class="col-md-5">N° de Documento</dt>
                                    <dd class="col-md-7">{{ $codebtor->number }} {{ $codebtor->extension }}</dd>
                                    <dt class="col-md-5">Estado Civil</dt>
                                    <dd class="col-md-7">{{ $codebtor->civil }}</dd>
                                    <dt class="col-md-5">Telefono Fijo</dt>
                                    <dd class="col-md-7">
                                        @if ($codebtor->landline)
                                            {{ $codebtor->landline }}
                                        @else
                                            --
                                        @endif
                                    <dt class="col-md-5">Actividad Primaria</dt>
                                    <dd class="col-md-7">{{ $codebtor->mainActivity }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Fecha de Nacimiento</dt>
                                    <dd class="col-md-7">{{ $codebtor->birth }}</dd>
                                    <dt class="col-md-5">Nacionalidad</dt>
                                    <dd class="col-md-7">{{ $codebtor->nacionality }}</dd>
                                    <dt class="col-md-5">N° de Dependientes</dt>
                                    <dd class="col-md-7">
                                        @if ($codebtor->dependents)
                                            {{ $codebtor->dependents }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">NIT</dt>
                                    <dd class="col-md-7">
                                        @if ($codebtor->nit)
                                            {{ $codebtor->nit }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                    <dt class="col-md-5">Actividad Secundaria</dt>
                                    <dd class="col-md-7">
                                        @if ($codebtor->secondaryActivity)
                                            {{ $codebtor->secondaryActivity }}
                                        @else
                                            --
                                        @endif
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($codebtor)
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header border border-dark p-2">
                        <h3 class="card-title">
                            <strong>Referencia Personal</strong>
                        </h3>
                    </div>
                    @if ($personal)
                        <div class="card-body border border-dark p-1">
                            <div class="row">
                                <div class="col-md-7">
                                    <dl class="row">
                                        <dt class="col-md-3">Nombre</dt>
                                        <dd class="col-md-9">{{ $codebtor->personal->name }}</dd>
                                        <dt class="col-md-3">Direccion</dt>
                                        <dd class="col-md-9">{{ $codebtor->personal->address }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-5">
                                    <dl class="row">
                                        <dt class="col-md-5">Vinculo</dt>
                                        <dd class="col-md-7">{{ $codebtor->personal->link }}</dd>
                                        <dt class="col-md-5">Telefono Movil</dt>
                                        <dd class="col-md-7">{{ $codebtor->personal->mobile }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header border border-dark p-2">
                        <h3 class="card-title">
                            <strong>Referencia Comercial</strong>
                        </h3>
                    </div>

                    @if ($client->commercial)
                        <div class="card-body border border-dark p-1">
                            <div class="row">
                                <div class="col-md-7">
                                    <dl class="row">
                                        <dt class="col-md-3">Nombre</dt>
                                        <dd class="col-md-9">{{ $codebtor->commercial->name }}</dd>
                                        <dt class="col-md-3">Direccion</dt>
                                        <dd class="col-md-9">{{ $codebtor->commercial->address }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-5">
                                    <dl class="row">
                                        <dt class="col-md-5">Vinculo</dt>
                                        <dd class="col-md-7">{{ $codebtor->commercial->link }}</dd>
                                        <dt class="col-md-5">Telefono Movil</dt>
                                        <dd class="col-md-7">{{ $codebtor->commercial->mobile }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
    @if ($secondary)
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header border border-dark p-2">
                        <h3 class="card-title">
                            <strong>Actividad Primaria</strong>
                        </h3>
                    </div>

                    @if ($primary)
                        <div class="card-body border border-dark p-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <dl class="row">
                                        <dt class="col-md-5">CAEDEC Actividad Primaria</dt>
                                        <dd class="col-md-7">{{ $primary->caedec->code }} {{ $primary->caedec->description }}</dd>
                                        <dt class="col-md-5">Actividad Especifica</dt>
                                        <dd class="col-md-7">{{ $primary->activity }}</dd>
                                        <dt class="col-md-5">Profeción/Ocupación</dt>
                                        <dd class="col-md-7">{{ $primary->profession }}</dd>
                                        <dt class="col-md-5">Realizada por</dt>
                                        <dd class="col-md-7">{{ $primary->responsable }}</dd>
                                        <dt class="col-md-5">Experiencia en el Rubro</dt>
                                        <dd class="col-md-7">{{ $primary->experience }}</dd>
                                        <dt class="col-md-5">Antiguedad del Negocio</dt>
                                        <dd class="col-md-7">{{ $primary->antiquity }}</dd>
                                        <dt class="col-md-5">Propiedad del puesto y/o Lugar</dt>
                                        <dd class="col-md-7">{{ $primary->property }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header border border-dark p-2">
                        <h3 class="card-title">
                            <strong>Actividad Secundaria</strong>
                        </h3>
                    </div>

                    @if ($secondary)
                        <div class="card-body border border-dark p-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <dl class="row">
                                        <dt class="col-md-5">CAEDEC Actividad Primaria</dt>
                                        <dd class="col-md-7">{{ $secondary->caedec->code }} {{ $secondary->caedec->description }}</dd>
                                        <dt class="col-md-5">Actividad Especifica</dt>
                                        <dd class="col-md-7">{{ $secondary->activity }}</dd>
                                        <dt class="col-md-5">Profeción/Ocupación</dt>
                                        <dd class="col-md-7">{{ $secondary->profession }}</dd>
                                        <dt class="col-md-5">Realizada por</dt>
                                        <dd class="col-md-7">{{ $secondary->responsable }}</dd>
                                        <dt class="col-md-5">Experiencia en el Rubro</dt>
                                        <dd class="col-md-7">{{ $secondary->experience }}</dd>
                                        <dt class="col-md-5">Antiguedad del Negocio</dt>
                                        <dd class="col-md-7">{{ $secondary->antiquity }}</dd>
                                        <dt class="col-md-5">Propiedad del puesto y/o Lugar</dt>
                                        <dd class="col-md-7">{{ $secondary->property }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border border-dark p-2">
                        <h3 class="card-title">
                            <strong>Actividad Primaria</strong>
                        </h3>
                    </div>

                    @if ($primary)
                        <div class="card-body border border-dark p-1">
                            <div class="row">
                                <div class="col-md-5">
                                    <dl class="row">
                                        <dt class="col-md-4">CAEDEC Actividad Primaria</dt>
                                        <dd class="col-md-8">{{ $primary->caedec->code }} {{ $primary->caedec->description }}</dd>
                                        <dt class="col-md-4">Actividad Especifica</dt>
                                        <dd class="col-md-8">{{ $primary->activity }}</dd>
                                        <dt class="col-md-4">Profeción/Ocupación</dt>
                                        <dd class="col-md-8">{{ $primary->profession }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl class="row">
                                        <dt class="col-md-6">Realizada por</dt>
                                        <dd class="col-md-6">{{ $primary->responsable }}</dd>
                                        <dt class="col-md-6">Experiencia en el Rubro</dt>
                                        <dd class="col-md-6">{{ $primary->experience }} meses</dd>
                                    </dl>
                                </div>
                                <div class="col-md-4">
                                    <dl class="row">
                                        <dt class="col-md-7">Antiguedad del Negocio</dt>
                                        <dd class="col-md-5">{{ $primary->antiquity }} meses</dd>
                                        <dt class="col-md-7">Propiedad del puesto y/o Lugar</dt>
                                        <dd class="col-md-5">{{ $primary->property }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        <strong>Datos del Prestamo</strong>
                    </h3>
                </div>

                @if ($loan)
                    <div class="card-body border border-dark p-1">
                        <div class="row">
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-5">Monto</dt>
                                    <dd class="col-md-7">{{ $loan->money }}</dd>
                                    <dt class="col-md-5">Moneda</dt>
                                    <dd class="col-md-7">{{ $loan->currency }}</dd>
                                    <dt class="col-md-5">Tasa</dt>
                                    <dd class="col-md-7">{{ $loan->rate }}%</dd>
                                    <dt class="col-md-5">Plazo</dt>
                                    <dd class="col-md-7">{{ $loan->term }}</dd>
                                    <dt class="col-md-5">N° de Cuotas</dt>
                                    <dd class="col-md-7">{{ $loan->share }}</dd>
                                    <dt class="col-md-5">Frecuencia</dt>
                                    <dd class="col-md-7">{{ $loan->frequency }}</dd>
                                    <dt class="col-md-5">Tipo de Cuota</dt>
                                    <dd class="col-md-7">{{ $loan->feeType }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-8">
                                <dl class="row">
                                    <dt class="col-md-5">Vencimiento fecha Fija cada</dt>
                                    <dd class="col-md-7">{{ $loan->expiration }}</dd>
                                    <dt class="col-md-5">Cuánto puede Ud. Pagar  de cuota /mes?</dt>
                                    <dd class="col-md-7">{{ $loan->choose }}</dd>
                                    <dt class="col-md-5">Garantia Ofrecida</dt>
                                    <dd class="col-md-7">{{ $loan->warrantyOne }}</dd>
                                    <dt class="col-md-5">y</dt>
                                    <dd class="col-md-7">{{ $loan->warrantyTwo }}</dd>
                                    <dt class="col-md-5">Destino de Credito</dt>
                                    <dd class="col-md-7">{{ $loan->destination }}</dd>
                                    <dt class="col-md-5">Detalle especifico del Destino</dt>
                                    <dd class="col-md-7">{{ $loan->detail }}</dd>
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
                <div class="card-header border border-dark p-2">
                    <h3 class="card-title">
                        <strong>Firmas</strong>
                    </h3>
                </div>

                <div class="card-body border border-dark p-1">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                PROEZA SRL. será propietario exclusivo de toda la información que obtenga y 
                                no estará obligado a emitir información alguna, ni a restituir los antecedentes 
                                que se hubiera recopilado en el curso de las investigaciones al solicitante, que 
                                se hayan adjuntado a esta declaración de bienes.
                                <br>
                                Declaro  bajo juramento que la información proporcionada es verídica, cierta y exacta, 
                                reconociendo el presente documento como declaración jurada y autorizo a PROEZA SRL. a 
                                verificar la misma.
                                <br>
                                Afirmo no estar vinculado a PROEZA SRL.  en ninguna de las formas previstas por ley.
                                <br>
                                Con el fin de considerar la presente solicitud de crédito y por el tiempo que dure mi 
                                relación crediticia  Con PROEZA SRL.  autorizo expresamente al mismo, a recabar sin 
                                restricción alguna todo tipo de información las veces que a su juicio considere necesaria 
                                y por cualquier medio. De manera especial de la Central de Información de Riesgo 
                                Crediticio (CIRC) de la Autoridad de Supervisión del Sistema Financiero (ASFI), los 
                                Burós de Información Crediticia (BIC), juzgados, empresas comerciales, Bancos, personas 
                                particulares y otros.  Asi mismo Autorizamos expresamente a PROEZA SRL. a incorporar los 
                                datos crediticios y otras cuentas por pagar de carácter económico, financiero y comercial 
                                derivados de la relación con PROEZA SRL. en la(s) base(s) de datos de propiedad de los 
                                Burós de información crediticia que cuenten con licencia de funcionamiento del Organismo de Supervisión.
                                <br>
                                De la misma manera, declaro (declaramos) que hemos sido debidamente informados sobre 
                                las condiciones del crédito, las cuales acepto (aceptamos) en su totalidad en forma expresa.
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
            <label>FIRMA SOLICITANTE</label>
        </div>
        <div class="col">
            <label>FIRMA CONYUGE</label>
        </div>
        <div class="col">
            <label>FIRMA Y SELLO ASESOR</label>
        </div>
    </div>
    {{-- <div class="row text-center">
        <div class="col">
            
        </div>
        <div class="col">

        </div>
        <div class="col">
            <label>{{ $client->folder->user->name }}</label>
        </div>
    </div> --}}
</body>
</html>
