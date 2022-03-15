<div class="modal fade" id="oanEdit{{ $oan->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Personal Percibe Salario Incluye Familia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('oans.update', $oan->id) }}" method="POST">
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
                                        <option value="{{ $oan->client->id }}">{{ $oan->client->name }} {{ $oan->client->lastName }}</option>
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
                                        <option>{{ $oan->item }}</option>
                                        <option>Anticréticos</option>
                                        <option>Puesto de Venta</option>
                                        <option>Líneas y/o Acciones</option>
                                        <option>Aporte Propio para la Compra de Activos</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Monto</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto " name="value" value="{{ $oan->value }}" required>
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
