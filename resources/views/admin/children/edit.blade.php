<div class="modal fade text-dark" id="childEdit{{ $child->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('children.update', $child->id) }}" method="POST">
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
                                        <option value="{{ $child->client->id }}">{{ $child->client->name }} {{ $child->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Edad</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Edad " name="age" value="{{ $child->age }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="custom-select form-control-border"
                                    name="gender" required>
                                        <option>{{ $child->gender }}</option>
                                        <option>MASCULINO</option>
                                        <option>FEMENINO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Estudia</label>
                                    <select class="custom-select form-control-border"
                                    name="student" required>
                                        <option>{{ $child->student }}</option>
                                        <option>SI</option>
                                        <option>NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Donde</label>
                                    <select class="custom-select form-control-border"
                                    name="where" required>
                                        <option>{{ $child->where }}</option>
                                        <option>INICIAL</option>
                                        <option>COLEGIO</option>
                                        <option>UNIVERSIDAD</option>
                                        <option>INSTITUTO</option>
                                        <option>OTRO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Entidad</label>
                                    <select class="custom-select form-control-border"
                                    name="type" required>
                                        <option>{{ $child->type }}</option>
                                        <option>FISCAL</option>
                                        <option>PARTICULAR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Otras Actividades</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Otras Actividades " name="other" value="{{ $child->other }}" required>
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
