<div class="modal fade text-dark" id="loanCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('loans.store') }}" method="POST">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Monto</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto" name="money" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Moneda</label>
                                    <select class="custom-select form-control-border" name="currency" required>
                                        <option>BOLIVIANOS</option>
                                        <option>DOLARES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tasa</label>
                                    <select class="custom-select form-control-border" name="rate" required>
                                        <option value="36">36 %</option>
                                        <option value="24">24 %</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Plazo</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Plazo" name="term" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">N° de Cuotas</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="N° de Cuotas" name="share" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Frecuencia</label>
                                    <select class="custom-select form-control-border" name="frequency" required>
                                        <option>MENSUAL</option>
                                        <option>BIMESTRAL</option>
                                        <option>TRIMESTRAL</option>
                                        <option>CUATRIMESTRAL</option>
                                        <option>SEMESTRAL</option>
                                        <option>ANUAL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de Cuota</label>
                                    <select class="custom-select form-control-border" name="feeType" required>
                                        <option>Francés (Cuota Fija)</option>
                                        <option>Alemán (Cuota Variable)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Vencimiento fecha Fija cada</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Vencimiento fecha Fija cada" name="expiration" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Cuánto puede Ud. Pagar  de cuota /mes?</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cuánto puede Ud. Pagar  de cuota /mes?" name="choose" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Garantia Ofrecida</label>
                                    <select class="custom-select form-control-border" name="warrantyOne" required>
                                        <option>GARANTIA PRENDARIA SIN INMUEBLE PROPIO O CASA DE FAMILIAR</option>
                                        <option>GARANTIA PRENDARIA CON INMUEBLE PROPIO SIN RESPALDO</option>
                                        <option>GARANTIA PRENDARIA CON INMUEBLE PROPIO NO PERFECCIONADO (MINUTA)</option>
                                        <option>GARANTIA PRENDARIA CON INMUEBLE PROPIO PERFECCIONADO (DDRR)</option>
                                        <option>GARANTIA PRENDARIA CON PUESTO Y/O CASETA PROPIA (ADJUNTAR PATENTE)</option>
                                        <option>PRENDA DE DOCUMENTOS NO PERFECCIONADO DE VEHÍCULO O INMUEBLE</option>
                                        <option>PRENDA DE DOCUMENTOS PERFECCIONADO DE VEHÍCULO O INMUEBLE</option>
                                        <option>PRENDA DE DOCUMENTOS PERFECCIONADOS AGRÍCOLAS (INRA)</option>
                                        <option>PRENDA DE DOCUMENTOS DE MAQUINARIA PESADA (PÓLIZA DE IMPORTACIÓN Y DCTO. COMPRA)</option>
                                        <option>GARANTE PERSONAL SIN INMUEBLE PROPIO O CASA DE FAMILIAR</option>
                                        <option>GARANTE PERSONAL CON INMUEBLE PROPIO SIN RESPALDO (FOTOGRAFIA)</option>
                                        <option>GARANTE PERSONAL CON INMUEBLE ( MINUTA)</option>
                                        <option>GARANTE PERSONAL CON INMUEBLE (DDRR)</option>
                                        <option>PREHIPOTECA DE INMUEBLE (DOCUMENTOS ORIGINALES)</option>
                                        <option>HIPOTECA DE DE INMUEBLE</option>
                                        <option>HIPOTECA DE VEHICULO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>y</label>
                                    <select class="custom-select form-control-border" name="warrantyTwo">
                                        <option></option>
                                        <option>GARANTIA PRENDARIA SIN INMUEBLE PROPIO O CASA DE FAMILIAR</option>
                                        <option>GARANTIA PRENDARIA CON INMUEBLE PROPIO SIN RESPALDO</option>
                                        <option>GARANTIA PRENDARIA CON INMUEBLE PROPIO NO PERFECCIONADO (MINUTA)</option>
                                        <option>GARANTIA PRENDARIA CON INMUEBLE PROPIO PERFECCIONADO (DDRR)</option>
                                        <option>GARANTIA PRENDARIA CON PUESTO Y/O CASETA PROPIA (ADJUNTAR PATENTE)</option>
                                        <option>PRENDA DE DOCUMENTOS NO PERFECCIONADO DE VEHÍCULO O INMUEBLE</option>
                                        <option>PRENDA DE DOCUMENTOS PERFECCIONADO DE VEHÍCULO O INMUEBLE</option>
                                        <option>PRENDA DE DOCUMENTOS PERFECCIONADOS AGRÍCOLAS (INRA)</option>
                                        <option>PRENDA DE DOCUMENTOS DE MAQUINARIA PESADA (PÓLIZA DE IMPORTACIÓN Y DCTO. COMPRA)</option>
                                        <option>GARANTE PERSONAL SIN INMUEBLE PROPIO O CASA DE FAMILIAR</option>
                                        <option>GARANTE PERSONAL CON INMUEBLE PROPIO SIN RESPALDO (FOTOGRAFIA)</option>
                                        <option>GARANTE PERSONAL CON INMUEBLE ( MINUTA)</option>
                                        <option>GARANTE PERSONAL CON INMUEBLE (DDRR)</option>
                                        <option>PREHIPOTECA DE INMUEBLE (DOCUMENTOS ORIGINALES)</option>
                                        <option>HIPOTECA DE DE INMUEBLE</option>
                                        <option>HIPOTECA DE VEHICULO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Destino de Credito</label>
                                    <select class="custom-select form-control-border" name="destination" required>
                                        <option>CREDITO DE CONSUMO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Detalle especifico del Destino</label>
                                    <select class="custom-select form-control-border" name="detail" required>
                                        <option>LIBRE DISPONIBILIDAD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
