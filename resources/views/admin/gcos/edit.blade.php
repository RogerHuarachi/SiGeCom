<div class="modal fade text-dark" id="gcoEdit{{ $gco->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('gcos.update', $gco->id) }}" method="POST">
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
                                        <option value="{{ $gco->client->id }}">{{ $gco->client->name }} {{ $gco->client->lastName }}</option>
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
                                        <option>{{ $gco->item }}</option>
                                        <option>Alquiler (Vivienda)</option>
                                        <option>Servicios Básicos (luz, agua, teléfono y otros)</option>
                                        <option>Alimentación</option>
                                        <option>Educación</option>
                                        <option>Salud  </option>
                                        <option>Transporte</option>
                                        <option>Imprevistos</option>
                                        <option>Vestimenta</option>
                                        <option>Insumos de Limpieza</option>
                                        <option>Gastos y Manto. de Vehiculos</option>
                                        <option>Recreación y Otros</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Monto</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto" name="money" step=".01" value="{{ $gco->money }}" required>
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
