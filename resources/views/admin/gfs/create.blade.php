<div class="modal fade" id="gfCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crear Gastos Familiares</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('gfs.store') }}" method="POST">
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
                                        <option>Alimentación</option>
                                        <option>Transporte familiar</option>
                                        <option>Servicios básicos (luz, agua, teléfono y otros)</option>
                                        <option>Serv. De Internet - TV cable -Teléfonos Cel.</option>
                                        <option>Educación (material, recreos, pasajes y otros)</option>
                                        <option>Vestimenta</option>
                                        <option>Salud</option>
                                        <option>Insumos de limpieza y Aseo</option>
                                        <option>Alquileres</option>
                                        <option>Impuestos Inmuebles familia</option>
                                        <option>Gastos y mantenimiento de vehículos familia</option>
                                        <option>Recreación</option>
                                        <option>Imprevistos</option>
                                        <option>Otros</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Monto</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto " name="total" required>
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
