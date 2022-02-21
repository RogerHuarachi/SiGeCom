<div class="modal fade" id="clientCreate">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar Cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('clients.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Identificador de carpeta</label>
                                    <div class="select2-primary">
                                        <select class="select2 form-control-border" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="folder_id" required>
                                            <option></option>
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
                                    placeholder="Nombre" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Apellido" name="lastName" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="custom-select form-control-border" name="gender" required>
                                        <option>MASCULINO</option>
                                        <option>FEMENINO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Documento de Identidad</label>
                                    <select class="custom-select form-control-border" name="identification" required>
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
                                    placeholder="1234567-12" name="number" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Extensión</label>
                                    <select class="custom-select form-control-border" name="extension" required>
                                        <option>--</option>
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
                                    placeholder="NIT" name="nit">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de nacimiento" name="birth" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Nacionalidad</label>
                                    <select class="custom-select form-control-border" name="nacionality" required>
                                        <option>BOLIVIANO (A)</option>
                                        <option>EXTRANJERO(A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>N° de Dependientes</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="N° de Dependientes" name="dependents">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Estado Civil</label>
                                    <select class="custom-select form-control-border" name="civil" required>
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
                                    placeholder="Telefono Movil" name="mobile" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Telefono Fijo</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Telefono Fijo" name="landline">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Actividad Primaria</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Actividad Primaria" name="mainActivity" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Actividad Secundaria</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Actividad Secundaria" name="secondaryActivity">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
