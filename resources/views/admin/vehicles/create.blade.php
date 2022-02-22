<div class="modal fade" id="vehicleCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Recepcion de Documento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('documents.store') }}" method="POST">
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
                                    <label>Tipo de Documento</label>
                                    <select class="custom-select form-control-border"
                                    name="type" required>
                                        <option>Vehiculo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descripcion</label>
                                    <select class="custom-select form-control-border"
                                    name="description" required>
                                        <option>Formulario RUAT</option>
                                        <option>Impuestos </option>
                                        <option>Poliza de importación</option>
                                        <option>Testimonio de propiedad</option>
                                        <option>Formulario de Registro de vehiculos</option>
                                        <option>Resolución de Inscripción de Vehiculos</option>
                                        <option>Certificado de Libertad</option>
                                        <option>Minuta de Compra y venta</option>
                                        <option>Poder</option>
                                        <option>Formulario de Inspección Vehiculo</option>
                                        <option>Fotocopia de Soat</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">N° Doc</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="N° Doc " name="doc" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">N° de Fojas</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="N° de Fojas " name="fojas" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Observacion</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Observacion " name="obs" required>
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
