<div class="modal fade text-dark" id="folderCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('usrfolders.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">T.C.</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="T.C." name="type" value="6.86" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Producto</label>
                                    <select class="custom-select form-control-border"
                                    name="product" required>
                                        <option>INDIVIDUAL PROEZA EFECTIVO</option>
                                        <option>INDIVIDUAL PROEZA PREFERENCIAL</option>
                                        <option>INDIVIDUAL PROEZA MICRO</option>
                                        <option>INDIVIDUAL PROEZA MICRO PEQUEÑO</option>
                                        <option>INDIVIDUAL PROEZA OPORTUNO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">Secuencia</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Secuencia" name="sequence" required>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Tipo de Op.</label>
                                    <select class="custom-select form-control-border"
                                    name="operation"  onChange="mostrar(this.value);" required>
                                        <option value="Nuevo">Nuevo</option>
                                        <option value="Paralelo">Paralelo</option>
                                        <option value="Represtamo">Represtamo</option>
                                        <option value="Financiamiento">Refinanciamiento</option>
                                        <option value="Reprogramación">Reprogramación</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" id="mca" style="display: none;">
                                <div class="form-group">
                                    <label for="name">Monto Credito Antiguo</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto Credito Antiguo" name="mca" step=".01">
                                </div>
                            </div>
                            <div class="col-md-6" id="sca" style="display: none;">
                                <div class="form-group">
                                    <label for="name">Saldo Capital Actual</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Saldo Capital Actual" name="sca" step=".01">
                                </div>
                            </div>
                            <div class="col-md-6" id="rt" style="display: none;">
                                <div class="form-group">
                                    <label for="name">Riesgo Total</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Riesgo Total" name="rt" step=".01">
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

@section('script')
<script>
function mostrar(id) {
    if (id == "Nuevo") {
        $("#mca").hide();
        $("#sca").hide();
        $("#rt").hide();
    }

    if (id == "Paralelo") {
        $("#mca").hide();
        $("#sca").show();
        $("#rt").show();
    }

    if (id == "Represtamo") {
        $("#mca").show();
        $("#sca").hide();
        $("#rt").hide();
    }

    if (id == "Financiamiento") {
        $("#mca").hide();
        $("#sca").show();
        $("#rt").hide();
    }

    if (id == "Reprogramación") {
        $("#mca").hide();
        $("#sca").show();
        $("#rt").hide();
    }
}
</script>
@endsection

