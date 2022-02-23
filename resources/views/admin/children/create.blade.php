<div class="modal fade" id="childCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar Hijos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('children.store') }}" method="POST">
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
                                    <label for="name">Edad</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Edad " name="age" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="custom-select form-control-border"
                                    name="gender" required>
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
                                        <option>FISCAL</option>
                                        <option>PARTICULAR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Otras Actividades</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Otras Actividades " name="other" required>
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
