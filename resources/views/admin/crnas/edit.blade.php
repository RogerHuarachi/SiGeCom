<div class="modal fade" id="memberEdit{{ $member->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('members.update', $member->id) }}" method="POST">
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
                                        <option value="{{ $member->client->id }}">{{ $member->client->name }} {{ $member->client->lastName }}</option>
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
                                        <option>{{ $member->type }}</option>
                                        <option>Nombre del garante personal</option>
                                        <option>Nombre del codeudor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Nombre" name="name" value="{{ $member->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">CI</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="CI" name="ci" value="{{ $member->ci }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Patrimonio total</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Patrimonio total" name="pt" step=".01" value="{{ $member->pt }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Monto Coverturado</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto Coverturado" name="mc" step=".01" value="{{ $member->mc }}" required>
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
