<div class="modal fade" id="oafEdit{{ $oaf->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Otros Activos de la Familia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('oafs.update', $oaf->id) }}" method="POST">
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
                                        <option value="{{ $oaf->client->id }}">{{ $oaf->client->name }} {{ $oaf->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Item</label>
                                    <select class="custom-select form-control-border"
                                    name="item" required>
                                        <option>{{ $oaf->item }}</option>
                                        <option>Anticréticos</option>												
                                        <option>Líneas y/o Acciones</option>												
                                        <option>Ahorros y Efectivo de la Familia</option>												
                                        <option>Otros activos de Actividad Secundarias</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Monto</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto " name="value" value="{{ $oaf->value }}" required>
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
