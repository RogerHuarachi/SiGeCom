<div class="modal fade" id="folderEdit{{ $folder->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('folders.update', $folder->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Asesor</label>
                                    <div class="select2-primary">
                                        <select class="select2" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;" name="user_id" required>
                                            <option value="{{ $folder->user->id }}">{{ $folder->user->name }}</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Secuencia</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Secuencia" name="sequence" value="{{ $folder->sequence }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Op.</label>
                                    <select class="custom-select form-control-border"
                                    name="operation" required>
                                        <option>{{ $folder->operation }}</option>
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
                                    placeholder="Tipo de Cambio" name="type" value="{{ $folder->type }}" step=".01" required>
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
