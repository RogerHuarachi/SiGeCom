<div class="modal fade" id="propertyCreate">
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
                                        <option>Bien Inmueble</option>
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
                                        <option>Testimonio de Propiedad RRDD</option>
                                        <option>Impuestos</option>
                                        <option>Plano de Lote</option>
                                        <option>Certificado Catastral</option>
                                        <option>Certificado Decenal (testimonio tradición)</option>
                                        <option>Folio Real Actualizado</option>
                                        <option>Vista de Información Rapida</option>
                                        <option>Plano de construccion</option>
                                        <option>Avaluo</option>
                                        <option>Poderes</option>
                                        <option>Gravamen a favor de la Institución</option>
                                        <option>Varios</option>
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
