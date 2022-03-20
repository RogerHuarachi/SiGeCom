<div class="modal fade" id="workEdit{{ $work->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('works.update', $work->id) }}" method="POST">
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
                                        <option value="{{ $work->client->id }}">{{ $work->client->name }} {{ $work->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Tipo de bien</label>
                                    <select class="custom-select form-control-border"
                                    name="type" required>
                                        <option>{{ $work->type }}</option>
                                        <option>Muebles y enseres, Equipos Electronicos, Instrumentos de trabajo, Heramientas y Otros</option>
                                        <option>Maquinaria y equipos</option>
                                        <option>Mercaderia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Cantidad</label>
                                    <input type="number" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Cantidad " name="amount" value="{{ $work->amount }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Descripción de Activo</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Descripción de Activo " name="description" value="{{ $work->description }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="name">Valor Comercial</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Valor Comercial " name="value" value="{{ $work->value }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Actividad</label>
                                    <select class="custom-select form-control-border"
                                    name="exercise" required>
                                        <option>{{ $work->exercise }}</option>
                                        <option>Primaria</option>
                                        <option>Secundaria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>En Garantia</label>
                                    <select class="custom-select form-control-border"
                                    name="state" required>
                                        <option>{{ $work->state }}</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
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
