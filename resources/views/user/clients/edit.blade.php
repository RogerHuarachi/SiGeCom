<div class="modal fade" id="clientEdit{{ $client->id }}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Usuarios</label>
                                    <div class="select2-primary">
                                        <select class="select2 form-control-border" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="folder_id" required>
                                            <option value="{{ $client->folder->id }}">{{ $client->folder->id }}</option>
                                            @foreach ($folders as $folder)
                                                <option value="{{ $folder->id }}">{{ $folder->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de Cliente</label>
                                    <select class="custom-select form-control-border" name="type" required>
                                        <option>Deudor</option>
                                        <option>Codeudor</option>
                                        <option>Garante</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Nombre" name="name" value="{{ $client->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Apellido" name="lastName" value="{{ $client->lastName }}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="custom-select form-control-border" name="gender" required>
                                        <option>{{ $client->gender }}</option>
                                        <option>MASCULINO</option>
                                        <option>FEMENINO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Documento de Identidad</label>
                                    <select class="custom-select form-control-border" name="identification" required>
                                        <option>{{ $client->identification }}</option>
                                        <option>CARNET DE IDENTIDAD</option>
                                        <option>CARNET DE EXTRANJERO</option>
                                        <option>RUN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>N° de Documento</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="1234567-12" name="number" value="{{ $client->number }}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Extensión</label>
                                    <select class="custom-select form-control-border" name="extension" required>
                                        <option>{{ $client->extension }}</option>
                                        <option>CB</option>
                                        <option>CH</option>
                                        <option>TR</option>
                                        <option>PD</option>
                                        <option>BN</option>
                                        <option>SC</option>
                                        <option>LP</option>
                                        <option>OR</option>
                                        <option>PT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>NIT</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="NIT" name="nit" value="{{ $client->nit }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de nacimiento" name="birth" value="{{ $client->birth }}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nacionalidad</label>
                                    <select class="custom-select form-control-border" name="nacionality" required>
                                        <option>{{ $client->nacionality }}</option>
                                        <option>BOLIVIANO (A)</option>
                                        <option>EXTRANJERO(A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>N° de Dependientes</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="N° de Dependientes" name="dependents" value="{{ $client->dependents }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Estado Civil</label>
                                    <select class="custom-select form-control-border" name="civil" required>
                                        <option>{{ $client->civil }}</option>
                                        <option>SOLTERO (A)</option>
                                        <option>CASADO (A)</option>
                                        <option>DIVORCIADO (A)</option>
                                        <option>VIUDO (A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Situación Laboral</label>
                                    <select class="custom-select form-control-border" name="employment" required>
                                        <option>{{ $client->employment }}</option>
                                        <option>INDEPENDIENTE</option>
                                        <option>DEPENDIENTE FORMAL</option>
                                        <option>DEPENDIENTE INFORMAL</option>
                                        <option>RENTISTA</option>
                                        <option>OTRO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Telefono Movil</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Telefono Movil" name="mobile" value="{{ $client->mobile }}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Telefono Fijo</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Telefono Fijo" name="landline" value="{{ $client->landline }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Actividad Primaria</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Actividad Primaria" name="mainActivity" value="{{ $client->mainActivity }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Actividad Secundaria</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Actividad Secundaria" name="secondaryActivity" value="{{ $client->secondaryActivity }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>



{{-- @extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Registrar</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">clientes</li>
    <li class="breadcrumb-item">editar</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <form action="{{ route('clients.update', $client->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ @method_field('PUT') }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Usuarios</label>
                                        <div class="select2-primary">
                                            <select id="year" class="select2" data-placeholder="Usuarios" name="user_id"
                                            data-dropdown-css-class="select2-primary" style="width: 100%;" required>
                                                <option value="{{ $client->user->id }}">{{ $client->user->name }}</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control form-control-border"
                                        onkeyup="javascript:this.value=this.value.toUpperCase();"
                                        placeholder="Nombre" name="name" value="{{ $client->name }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control form-control-border"
                                        onkeyup="javascript:this.value=this.value.toUpperCase();"
                                        placeholder="Apellido" name="lastName" value="{{ $client->lastName }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Sexo</label>
                                        <select class="custom-select form-control-border" name="gender" required>
                                            <option>{{ $client->gender }}</option>
                                            <option>MASCULINO</option>
                                            <option>FEMENINO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Documento de Identidad</label>
                                        <select class="custom-select form-control-border" name="identification" required>
                                            <option>{{ $client->identification }}</option>
                                            <option>CARNET DE IDENTIDAD</option>
                                            <option>CARNET DE EXTRANJERO</option>
                                            <option>RUN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>N° de Documento</label>
                                        <input type="number" class="form-control form-control-border"
                                        placeholder="1234567-12" name="number" value="{{ $client->number }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Extensión</label>
                                        <select class="custom-select form-control-border" name="extension" required>
                                            <option>{{ $client->extension }}</option>
                                            <option>CB</option>
                                            <option>CH</option>
                                            <option>TR</option>
                                            <option>PD</option>
                                            <option>BN</option>
                                            <option>SC</option>
                                            <option>LP</option>
                                            <option>OR</option>
                                            <option>PT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>NIT</label>
                                        <input type="number" class="form-control form-control-border"
                                        placeholder="NIT" name="nit" value="{{ $client->nit }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" class="form-control form-control-border"
                                        placeholder="Fecha de nacimiento" name="birth" value="{{ $client->birth }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Nacionalidad</label>
                                        <select class="custom-select form-control-border" name="nacionality" required>
                                            <option>{{ $client->nacionality }}</option>
                                            <option>BOLIVIANO (A)</option>
                                            <option>EXTRANJERO(A)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>N° de Dependientes</label>
                                        <input type="number" class="form-control form-control-border"
                                        placeholder="N° de Dependientes" name="dependents" value="{{ $client->dependents }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Estado Civil</label>
                                        <select class="custom-select form-control-border" name="civil" required>
                                            <option>{{ $client->civil }}</option>
                                            <option>SOLTERO (A)</option>
                                            <option>CASADO (A)</option>
                                            <option>DIVORCIADO (A)</option>
                                            <option>VIUDO (A)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Situación Laboral</label>
                                        <select class="custom-select form-control-border" name="employment" required>
                                            <option>{{ $client->employment }}</option>
                                            <option>INDEPENDIENTE</option>
                                            <option>DEPENDIENTE FORMAL</option>
                                            <option>DEPENDIENTE INFORMAL</option>
                                            <option>RENTISTA</option>
                                            <option>OTRO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Telefono Celular</label>
                                        <input type="number" class="form-control form-control-border"
                                        placeholder="Telefono Celular" name="mobile" value="{{ $client->mobile }}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Telefono Fijo</label>
                                        <input type="number" class="form-control form-control-border"
                                        placeholder="Telefono Fijo" name="landline" value="{{ $client->landline }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Actividad Primaria</label>
                                        <input type="text" class="form-control form-control-border"
                                        onkeyup="javascript:this.value=this.value.toUpperCase();"
                                        placeholder="Actividad Primaria" name="mainActivity" value="{{ $client->mainActivity }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Actividad Secundaria</label>
                                        <input type="text" class="form-control form-control-border"
                                        onkeyup="javascript:this.value=this.value.toUpperCase();"
                                        placeholder="Actividad Secundaria" name="secondaryActivity" value="{{ $client->secondaryActivity }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <a class="btn btn-default" href="{{ route('clients.index') }}">Atras</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
