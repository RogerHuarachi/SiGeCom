<div class="modal fade" id="acnCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Gastos y Mantenimiento de Vehiculo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('acns.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="custom-select form-control-border"
                                    name="client_id" required>
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastName }}</option>
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
                                        <option>Gastos en empleados</option>
                                        <option>Efectivo o Caja</option>
                                        <option>Total Inventarios (MP, PP, PT)</option>
                                        <option>Cuentas por Cobrar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Monto</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto " name="value" required>
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
