<div class="modal fade" id="ddgEdit{{ $ddg->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('ddgs.update', $ddg->id) }}" method="POST">
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
                                        <option value="{{ $ddg->client->id }}">{{ $ddg->client->name }} {{ $ddg->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tipo de bien</label>
                                    <select class="custom-select form-control-border"
                                    name="garanty" required>
                                        <option>{{ $ddg->garanty }}</option>
                                        @if ($ddg->client->loan->warrantyOne)
                                            <option>{{ $ddg->client->loan->warrantyOne }}</option>
                                        @endif
                                        @if ($ddg->client->loan->warrantyOtwo)
                                            <option>{{ $ddg->client->loan->warrantyOtwo }}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Valor Comercial</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Valor Comercial" name="vc" step=".01" value="{{ $ddg->vc }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Monto Coverturado</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Valor Comercial" name="mc" step=".01" value="{{ $ddg->mc }}" required>
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
