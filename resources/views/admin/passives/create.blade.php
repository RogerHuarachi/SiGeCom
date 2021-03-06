<div class="modal fade text-dark" id="passiveCreate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('passives.store') }}" method="POST">
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
                                <div class="form-group">
                                    <label>Nombre del Banco u otro Acreedor</label>
                                    <div class="select2-primary">
                                        <select class="select2 form-control-border" data-placeholder="Select a State"
                                        data-dropdown-css-class="select2-primary" style="width: 100%;" name="creditor" required>
                                            <option>Deudas con Terceros/Personales</option>
                                            <option>Deudas Comerciales y de Servicios</option>
                                            <option>Deudas con Otras Financieras S.R.L.</option>
                                            <option>Proeza SRL.</option>
                                            <option>Banco de Desarrollo Productivo S.A.M.</option>
                                            <option>Banco BISA S.A.</option>
                                            <option>Banco de Cr??dito de Bolivia S.A.</option>
                                            <option>Banco de la Naci??n Argentina S. A.</option>
                                            <option>Banco Econ??mico S.A.</option>
                                            <option>Banco Fassil S.A.</option>
                                            <option>Banco Fortaleza S.A.</option>
                                            <option>Banco Ganadero S.A.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "CACEF" R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "F??tima" R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "La Merced" R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "La Sagrada Familia" R.L..</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "Madre y Maestra" R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "Magisterio Rural de Chuquisaca" R.L..</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "Progreso" R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "San Joaquin" R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta "San Roque" R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Asunci??n Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Catedral de Tarija Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Catedral R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Comarapa Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Educadores Gran Chaco R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta El Chorolque Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Inca Huasi Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Jes??s Nazareno R. L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Loyola Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Magisterio Rural Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Monse??or F??lix Gainza Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta P??o X Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Quillacollo Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta San Antonio Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta San Carlos Borromeo R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta San jos?? de Bermejo Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta San Jos?? de Punata Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta San Mart??n de Porres Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta San Mateo Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta San Pedro Ltda.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Abierta Trinidad R.L.</option>
                                            <option>Cooperativa de Ahorro y Cr??dito Societaria "San Mart??n" R.L.</option>
                                            <option>El Progreso Entidad Financiera de Vivienda</option>
                                            <option>La Primera Entidad Financiera de Vivienda</option>
                                            <option>La Promotora Entidad Financiera de Vivienda</option>
                                            <option>CIDRE IFD</option>
                                            <option>CRECER IFD</option>
                                            <option>DIACON??A FRIF - IFD</option>
                                            <option>FONDECO IFD</option>
                                            <option>FUBODE IFD</option>
                                            <option>Fundaci??n Pro Mujer IFD</option>
                                            <option>IDEPRO IFD</option>
                                            <option>IMPRO IFD</option>
                                            <option>Sembrar Sartawi IFD</option>
                                            <option>CREDVA</option>
                                            <option>FIMIRAP SRL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Cuota Mensual</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Cuota Mensual " name="share" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Saldo Deudor</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Saldo Deudor " name="balace" step=".01" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select class="custom-select form-control-border"
                                    name="state" required>
                                        <option>MANTIENE</option>
                                        <option>PARALELO</option>
                                        <option>REFINANCIAMIENTO</option>
                                        <option>LIQUIDACION</option>
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
