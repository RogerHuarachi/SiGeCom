<div class="modal fade text-dark" id="justificationCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('justifications.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="custom-select form-control-border"
                                    name="client_id" required>
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastName }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nombre del Banco u otro Acreedor</label>
                                        <div class="select2-primary">
                                            <select class="select2 form-control-border" data-placeholder="Select a State"
                                            data-dropdown-css-class="select2-primary" style="width: 100%;" name="type" required>
                                                <option>1. EXCEPCION A LA NO PARTICIPACION DEL CONYUGE DEL DEUDOR</option>
                                                <option>2. EXCEPCION A LA NO PARTICIPACION DEL CONYUGE GARANTE</option>
                                                <option>3. EXCEPCION A LA NO PRESENTACION DE FACTURAS DE SERVICIOS BASICOS (LUZ,AGUA,GAS)</option>
                                                <option>4. EXCEPCI??N A LA ANTIGUEDAD DEL NEGOCIO O ANTIG??EDAD LABORAL MENOR A 1 A??O</option>
                                                <option>5. EXCEPCIONA LAS 3 ULTIMAS BOLETAS DE PAGO, AFPs o CERTIFICADO DE TRABAJO (2 DE 3)</option>
                                                <option>6. EXCEPCI??N A LA EDAD MINIMA DE 21 A??OS NO MENOR A 18 A??OS CLIENTE/GARANTE</option>
                                                <option>7. EXCEPCI??N A LA EDAD MAXIMA NO MAYOR A LOS 70 A??OS INCLUYENDO EL PLAZO DEL CREDITO</option>
                                                <option>8. EXCEPCI??N A LA CAPACIDAD DE PAGO PARA ASALARIADO HASTA EL 60% </option>
                                                <option>9. EXCEPCI??N A LA NO REALIZACI??N DE RECONOCIMIENTO DE FIRMAS </option>
                                                <option>10. EXCEPCI??N A LA NORMA DE REFINANCIAMIENTO REFINANCIAMIENTO</option>
                                                <option>11. EXCEPCI??N A LA RELACI??N GARANTIA - DEUDA  HASTA 1,5 A 1 </option>
                                                <option>12. EXCEPCION A LA OTORGACION DEL CREDITO A UN PLAZO MAYOR SEG??N MONTOS MAXIMOS</option>
                                                <option>13. EXCEPCI??N A LA AMPLICION DE GARANTIA SEG??N TECHOS MAXIMOS DE COBERTURA</option>
                                                <option>14. AUTORIZACION A LA OTORGACION DE CREDITO A UN FAMILIAR HASTA TERCER GRADO.</option>
                                                <option>15. EXCEPCION AL RESPALDO DE DOCUMENTO DE COMPRA DE BIEN INMUEBLE O VEHICULO</option>
                                                <option>16. EXCEPCION A LA PRESENTACION DE RESPALDO ACTUALIZADO DE PAGO DE PASIVOS</option>
                                                <option>17. AUTORIZACION A CUARTO ENDEUDAMIENTO INCLUYENDO PROEZA SRL.</option>
                                                <option>18. EXCEPCION A LA RELACION PATRIMONIAL DEL CLIENTE CON EL CREDITO SOLICITADO (3 a 1)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="my-textarea">Justificaci??n</label>
                                        <textarea id="my-textarea" class="form-control form-control-border" name="justification" rows="3"></textarea>
                                    </div>
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
