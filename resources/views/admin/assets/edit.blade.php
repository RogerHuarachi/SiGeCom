<div class="modal fade" id="assetEdit{{ $asset->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Activo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('assets.update', $asset->id) }}" method="POST">
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
                                        <option value="{{ $asset->client->id }}">{{ $asset->client->name }} {{ $asset->client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tipo de Bien</label>
                                    <div class="select2-primary">
                                        <select class="select2 form-control-border" data-placeholder="Select a State"
                                        data-dropdown-css-class="select2-primary" style="width: 100%;" name="type" required>
                                            <option>{{ $asset->type }}</option>
                                            <option>Cuentas de Ahorro</option>
                                            <option>Cuentas Corrientes</option>
                                            <option>Depositos a Plazo fijo y/o Titulos Valores</option>
                                            <option>Inmuebles Urbanos con Minuta</option>
                                            <option>Inmuebles Urbanos con Registro</option>
                                            <option>Inmuebles Rurales con Minuta</option>
                                            <option>Inmuebles Rurales con Registro</option>
                                            <option>Lote de Terreno con Minuta</option>
                                            <option>Lote de Terreno con Registro</option>
                                            <option>Vehiculos Actividad Principal</option>
                                            <option>Vehiculos Actividad Secundaria</option>
                                            <option>Vehiculos de la Familia</option>
                                            <option>Muebles y Enseres del Hogar</option>
                                            <option>Muebles Enseres y Herramientas Actividad Principal</option>
                                            <option>Muebles Enseres y Herramientas Actividades Secundarias</option>
                                            <option>Muebles Enseres y Herramientas Otras Actividades</option>
                                            <option>Equipos electronicos y electrodomesticos del Hogar</option>
                                            <option>Equipos electronicos Actividad Principal</option>
                                            <option>Equipos electronicos Actividades Secundarias</option>
                                            <option>Equipos electronicos Otras Actividades</option>
                                            <option>Maquinaria y Equipos Actividad Principal</option>
                                            <option>Maquinaria y Equipos Actividades Secundarias</option>
                                            <option>Otros Equipos y Herramientas del Hogar</option>
                                            <option>Efectivo del Negocio</option>
                                            <option>Efectivo Segunda Actividad</option>
                                            <option>Inventarios Actividad Principal</option>
                                            <option>Inventarios Actividad Secundaria</option>
                                            <option>Pagos Anticipados </option>
                                            <option>Cuentas por Cobrar </option>
                                            <option>Anticretico del Negocio</option>
                                            <option>Anticretico de la Familia</option>
                                            <option>Ahorro de la Familia</option>
                                            <option>Puesto de Venta</option>
                                            <option>Aporte Propio para Compra de Activos</option>
                                            <option>Lineas y Acciones del negocio</option>
                                            <option>Lineas y Acciones de la Familia</option>
                                            <option>Semovientes Actividad Principal</option>
                                            <option>Semovientes Actividad Secundaria</option>
                                            <option>Semovientes Familiar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>En Garantia</label>
                                    <select class="custom-select form-control-border"
                                    name="warranty" required>
                                        <option>{{ $asset->warranty }}</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Valor</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Valor" name="value" value="{{ $asset->value }}"  step=".01" required>
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
