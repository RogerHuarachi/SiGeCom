<div class="modal fade text-dark" id="dgeEdit{{ $dge->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dges.update', $dge->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="custom-select form-control-border"
                                    name="client_id" required>
                                        <option value="{{ $dge->client->id }}">{{ $dge->client->name }} {{ $dge->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Lugar/Empresa de trabajo</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Lugar/Empresa de trabajo " name="business" value="{{ $dge->business }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Cargo</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Cargo " name="position" value="{{ $dge->position }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="name">Empleador</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Empleador " name="employer" value="{{ $dge->employer }}" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="name">Fecha de conversación</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de conversación " name="date" value="{{ $dge->date }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fecha de pago de salario</label>
                                    <select class="custom-select form-control-border"
                                    name="payment" required>
                                        <option>{{ $dge->payment }}</option>
                                        <option>Primeros dias del mes</option>
                                        <option>Mediados del mes</option>
                                        <option>Ultimos dias del mes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">Antiguedad</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Años" name="year" value="{{ $dge->year }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">Antiguedad</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Meses" name="month" value="{{ $dge->month }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Hijos dependientes</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Hijos dependientes" name="son" value="{{ $dge->son }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Otros dependientes</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Otros dependientes" name="other" value="{{ $dge->other }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="my-textarea">Descripción</label>
                                    <textarea id="my-textarea" class="form-control form-control-border" name="description" rows="3">{{ $dge->description }}</textarea>
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
