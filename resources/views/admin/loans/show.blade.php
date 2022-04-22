<div class="modal fade text-dark" id="loanShow{{ $loan->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <dl class="row">
                <dt class="col-md-4">Monto</dt>
                <dd class="col-md-8">{{ $loan->money }}</dd>
                <dt class="col-md-4">Moneda</dt>
                <dd class="col-md-8">{{ $loan->currency }}</dd>
                <dt class="col-md-4">Tasa</dt>
                <dd class="col-md-8">{{ $loan->rate }}%</dd>
                <dt class="col-md-4">Plazo</dt>
                <dd class="col-md-8">{{ $loan->term }}</dd>
                <dt class="col-md-4">N° de Cuotas</dt>
                <dd class="col-md-8">{{ $loan->share }}</dd>
                <dt class="col-md-4">Frecuencia</dt>
                <dd class="col-md-8">{{ $loan->frequency }}</dd>
                <dt class="col-md-4">Tipo de Cuota</dt>
                <dd class="col-md-8">{{ $loan->feeType }}</dd>
                <dt class="col-md-4">Vencimiento fecha Fija cada</dt>
                <dd class="col-md-8">{{ $loan->expiration }}</dd>
                <dt class="col-md-4">Cuánto puede Ud. Pagar  de cuota /mes?</dt>
                <dd class="col-md-8">{{ $loan->choose }}</dd>
                <dt class="col-md-4">Garantia Ofrecida</dt>
                <dd class="col-md-8">{{ $loan->warrantyOne }}</dd>
                <dt class="col-md-4">y</dt>
                <dd class="col-md-8">{{ $loan->warrantyTwo }}</dd>
                <dt class="col-md-4">Destino de Credito</dt>
                <dd class="col-md-8">{{ $loan->destination }}</dd>
                <dt class="col-md-4">Detalle especifico del Destino</dt>
                <dd class="col-md-8">{{ $loan->detail }}</dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
