<div class="modal fade text-dark" id="folderEdit{{ $folder->id }}">
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">T.C.</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Tipo de Cambio" name="type" value="{{ $folder->type }}" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Producto</label>
                                    <select class="custom-select form-control-border"
                                        name="product" required>
                                        <option>{{ $folder->operation }}</option>
                                        <option>INDIVIDUAL PROEZA PREFERENCIAL</option>
                                        <option>INDIVIDUAL PROEZA PREFERENCIAL</option>
                                        <option>INDIVIDUAL PROEZA MICRO</option>
                                        <option>INDIVIDUAL PROEZA MICRO PEQUEÑO</option>
                                        <option>INDIVIDUAL PROEZA OPORTUNO</option>
                                    </select>
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
                                        <option value="{{ $folder->operation }}">{{ $folder->operation }}</option>
                                        <option value="Nuevo">Nuevo</option>
                                        <option value="Paralelo">Paralelo</option>
                                        <option value="Represtamo">Represtamo</option>
                                        <option value="Financiamiento">Financiamiento</option>
                                        <option value="Reprogramación">Reprogramación</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if ($folder->mca)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Monto Credito Antiguo</label>
                                        <input type="number" class="form-control form-control-border"
                                        placeholder="Monto Credito Antiguo" name="mca" step=".01" value="{{ $folder->mca }}">
                                    </div>
                                </div>
                            @endif
                            @if ($folder->sca)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Saldo Capital Actual</label>
                                        <input type="number" class="form-control form-control-border"
                                        placeholder="Saldo Capital Actual" name="sca" step=".01" value="{{ $folder->sca }}">
                                    </div>
                                </div>
                            @endif
                            @if ($folder->rt)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Riesgo Total</label>
                                        <input type="number" class="form-control form-control-border"
                                        placeholder="Riesgo Total" name="rt" step=".01" value="{{ $folder->rt }}">
                                    </div>
                                </div>
                            @endif
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
