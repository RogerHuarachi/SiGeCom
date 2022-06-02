<div class="modal fade text-dark" id="residenceEdit{{ $residence->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('residences.update', $residence->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="custom-select form-control-border" name="client_id" required>
                                        <option value="{{ $residence->client->id }}">{{ $residence->client->name }} {{ $residence->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de Propiedad</label>
                                    <select class="custom-select form-control-border" name="property" required>
                                        <option>{{ $residence->property }}</option>
                                        <option>PROPIO</option>
                                        <option>ALQUILER</option>
                                        <option>ANTICRETICO</option>
                                        <option>PRESTADO FAMILIAR</option>
                                        <option>CUIDADOR</option>
                                        <option>PAPAS</option>
                                        <option>HERMANOS</option>
                                        <option>ABUELOS</option>
                                        <option>TIOS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Tiempo que Reside (meses)</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Tiempo que Reside" name="time" value="{{ $residence->time }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Dir. Domicilio</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Dir. Domicilio" name="direction" value="{{ $residence->direction }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">N°</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="N°" name="number" value="{{ $residence->number }}">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="name">Zona</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Zona" name="zone" value="{{ $residence->zone }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Telefono</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Telefono" name="mobile" value="{{ $residence->mobile }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Provincia/Municipio/Comunidad</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Provincia" name="province" value="{{ $residence->province }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="my-input">Imagen</label>
                                    <input id="my-input" class="form-control-file" type="file" name="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="my-textarea">Descripción</label>
                                    <textarea id="my-textarea" class="form-control form-control-border"
                                    name="description" rows="3">{{ $residence->description }}</textarea>
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
