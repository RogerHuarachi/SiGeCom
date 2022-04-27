<div class="modal fade text-dark" id="icoEdit{{ $ico->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('icos.update', $ico->id) }}" method="POST">
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
                                        <option value="{{ $ico->client->id }}">{{ $ico->client->name }} {{ $ico->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="custom-select form-control-border"
                                    name="type" required>
                                        <option>{{ $ico->type }}</option>
                                        <option>Cliente</option>
                                        <option>Conyugue</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Salario Bruto (+)</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Salario Bruto " name="sb" step=".01" value="{{ $ico->sb }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Aportes de Ley (-)</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Aportes de Ley " name="al" step=".01" value="{{ $ico->al }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Otros Descuentos (-)</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Otros Descuentos " name="od" step=".01" value="{{ $ico->od }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Otros ingresos (+)</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Otros ingresos " name="oi" step=".01" value="{{ $ico->oi }}">
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
