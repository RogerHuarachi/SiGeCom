<div class="modal fade" id="documentEdit{{ $document->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('documents.update', $document->id) }}" method="POST">
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
                                        <option value="{{ $document->client->id }}">{{ $document->client->name }} {{ $document->client->lastName }}</option>
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
                                        <option>{{ $document->type }}</option>
                                        <option>Bien Inmueble</option>
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
                                        <option>{{ $document->description }}</option>
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
                                    placeholder="N° Doc " name="doc" value="{{ $document->doc }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">N° de Fojas</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="N° de Fojas " name="fojas" value="{{ $document->fojas }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Observacion</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Observacion " name="obs" value="{{ $document->obs }}" required>
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
