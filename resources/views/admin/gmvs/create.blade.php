<div class="modal fade number-dark" id="gmvCreate">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar</h4>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Reposición de Llantas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Cambios de Aceites en Gral.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Filtros, Líquidos hidráulicos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Reposición de Batería</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Servicios Mecánicos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Servicios Eléctricos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Parchado y Aire</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Póliza de seguro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Soat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Inspección técnica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Impuesto anual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Aporte Sindicato afiliado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="item[]" required>
                                        <option>Combustible</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio Unitario" name="price[]" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="custom-select form-control-border"
                                    name="frequency[]" required>
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
