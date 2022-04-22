<div class="modal fade text-dark" id="businessCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('businesses.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="custom-select form-control-border" name="client_id" required>
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastName }}</option>
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
                                        @foreach ($caedecs as $caeded)
                                            <option value="{{ $caeded->id }}">{{ $caeded->code }} {{ $caeded->description }}</option>
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
                                    placeholder="Actividad Especifica" name="activity" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Profeción/Ocupación</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Profeción/Ocupación" name="profession" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Realizada por</label>
                                    <select class="custom-select form-control-border" name="responsable" required>
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
                                    <label for="name">Experiencia en el Rubro</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Experiencia en el Rubr" name="experience" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Antiguedad del Negocio</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Antiguedad del Negocio" name="antiquity" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Propiedad del puesto y/o Lugar</label>
                                    <select class="custom-select form-control-border" name="property" required>
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
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
