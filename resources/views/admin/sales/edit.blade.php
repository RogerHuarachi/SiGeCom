<div class="modal fade text-dark" id="saleEdit{{ $sale->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('sales.update', $sale->id) }}" method="POST">
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
                                        <option value="{{ $sale->client->id }}">{{ $sale->client->name }} {{ $sale->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tipo de bien</label>
                                    <select class="custom-select form-control-border"
                                    name="type" required>
                                        <option>{{ $sale->type }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @if ($sale->type == "Diario")
                                    <div class="form-group">
                                        <label>Dia</label>
                                        <select class="custom-select form-control-border"
                                        name="item" required>
                                            <option>{{ $sale->item }}</option>
                                        </select>
                                    </div>
                                @endif
                                @if ($sale->type == "Semanal")
                                    <div class="form-group">
                                        <label>Semana</label>
                                        <select class="custom-select form-control-border"
                                        name="item" required>
                                            <option>{{ $sale->item }}</option>
                                        </select>
                                    </div>
                                @endif
                                @if ($sale->type == "Mensual")
                                    <div class="form-group">
                                        <label>Mes</label>
                                        <select class="custom-select form-control-border"
                                        name="item" required>
                                            <option>{{ $sale->item }}</option>
                                            <option>Enero</option>
                                            <option>Febrero</option>
                                            <option>Marzo</option>
                                            <option>Abril</option>
                                            <option>Mayo</option>
                                            <option>Junio</option>
                                            <option>Julio</option>
                                            <option>Agosto</option>
                                            <option>Septiembre</option>
                                            <option>Octubre</option>
                                            <option>Noviembre</option>
                                            <option>Diciembre</option>
                                        </select>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Monto</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Monto" name="money" value="{{ $sale->money }}" required>
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
