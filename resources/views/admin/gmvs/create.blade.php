<div class="modal fade" id="gmvCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Gastos y Mantenimiento de Vehiculo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('gmvs.store') }}" method="POST">
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
                                    <label>Tipo de bien</label>
                                    <select class="custom-select form-control-border"
                                    name="item" required>
                                        <option>Reposición de Llantas</option>
                                        <option>Cambios de Aceites en Gral.</option>
                                        <option>Filtros, Líquidos hidráulicos</option>
                                        <option>Reposición de Batería</option>
                                        <option>Servicios Mecánicos</option>
                                        <option>Servicios Eléctricos</option>
                                        <option>Parchado y Aire</option>
                                        <option>Póliza de seguro</option>
                                        <option>Soat</option>
                                        <option>Inspección técnica</option>
                                        <option>Impuesto anual</option>
                                        <option>Aporte Sindicato afiliado</option>
                                        <option>Combustible</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Cantidad</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Precio Unitario</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Frecuencia</label>
                                    <select class="custom-select form-control-border"
                                    name="frequency" required>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        <option>BIMESTRAL</option>
                                        <option>TRIMESTRAL</option>
                                        <option>SEMESTRAL</option>
                                        <option>ANUAL</option>
                                    </select>
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
