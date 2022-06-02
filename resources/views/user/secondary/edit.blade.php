<div class="modal fade text-dark" id="businessEdit{{ $secondary->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('businesses.update', $secondary->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="custom-select form-control-border" name="client_id" required>
                                        <option value="{{ $secondary->client->id }}">{{ $secondary->client->name }} {{ $secondary->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>CAEDEC Actividad Primaria</label>
                                    <div class="select2-primary">
                                    <select class="select2" data-placeholder="Select a State"
                                    data-dropdown-css-class="select2-primary" style="width: 100%;" name="caedec_id" required>
                                        <option value="{{ $secondary->caedec->id }}">{{ $secondary->caedec->code }} {{ $secondary->caedec->description }}</option>
                                        @foreach ($caedecs as $caedec)
                                            <option value="{{ $caedec->id }}">{{ $caedec->code }} {{ $caedec->description }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Actividad Especifica</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Nombre" name="activity" value="{{ $secondary->activity }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Profeción/Ocupación</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Codigo" name="profession" value="{{ $secondary->profession }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Realizada por</label>
                                    <select class="custom-select form-control-border" name="responsable" required>
                                        <option>{{ $secondary->responsable }}</option>
                                        <option>CLIENTE</option>
                                        <option>CONYUGE</option>
                                        <option>AMBOS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Experiencia en el Rubro (meses)</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Codigo" name="experience" value="{{ $secondary->experience }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Antiguedad del Negocio (meses)</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Nombre" name="antiquity" value="{{ $secondary->antiquity }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Propiedad del puesto y/o Lugar</label>
                                    <select class="custom-select form-control-border" name="property" required>
                                        <option>{{ $secondary->property }}</option>
                                        <option>PROPIO</option>
                                        <option>ALQUILER</option>
                                        <option>ANTICRETICO</option>
                                        <option>FAMILIAR</option>
                                        <option>PRESTADO</option>
                                        <option>AMBULANTE</option>
                                    </select>
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
