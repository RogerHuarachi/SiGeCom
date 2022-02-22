<div class="modal fade" id="inventoryEdit{{ $inventory->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Insumo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('inventories.update', $inventory->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Producto</label>
                                    <select class="custom-select form-control-border"
                                    name="product_id" required>
                                        <option value="{{ $inventory->client->id }}">{{ $inventory->client->name }} {{ $inventory->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Actividad</label>
                                    <select class="custom-select form-control-border"
                                    name="activity" required>
                                        <option>{{ $inventory->activity }}</option>
                                        <option>Primaria</option>
                                        <option>Secundaria</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Producto</label>
                                    <select class="custom-select form-control-border"
                                    name="type" required>
                                        <option>{{ $inventory->type }}</option>
                                        <option>MP</option>
                                        <option>PP</option>
                                        <option>PT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Cantidad</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cantidad " name="amount" value="{{ $inventory->amount }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Unidad</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Unidad " name="unit" value="{{ $inventory->unit }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Producto</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Producto " name="name" value="{{ $inventory->name }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Precio de Compra</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio de Compra " name="buys" value="{{ $inventory->buys }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Precio de Venta</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Precio de Venta " name="sale" value="{{ $inventory->sale }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">% Avance</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="% Avance " name="advance" value="{{ $inventory->advance }}" required>
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
