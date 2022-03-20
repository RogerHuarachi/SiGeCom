<div class="modal fade" id="folderCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('usrfolders.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Secuencia</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Secuencia" name="sequence" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Op.</label>
                                    <select class="custom-select form-control-border"
                                    name="operation" required>
                                        <option>Nuevo</option>
                                        <option>Paralelo</option>
                                        <option>Represtamo</option>
                                        <option>Financiamiento</option>
                                        <option>Reprogramación</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Tipo de Cambio</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Tipo de Cambio" name="type" value="6.86" step=".01" required>
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
