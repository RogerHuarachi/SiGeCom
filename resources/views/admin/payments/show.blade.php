<div class="modal fade" id="paymentShow{{ $payment->id }}">
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
                <dt class="col-sm-4">PROEZA Atrasos</dt>
                <dd class="col-sm-8">
                    {{ $payment->proeza }}
                </dd>
                <dt class="col-sm-4">Razon</dt>
                <dd class="col-sm-8">
                    {{ $payment->obs1 }}
                </dd>
                <dt class="col-sm-4">Obsevacioines BIC</dt>
                <dd class="col-sm-8">
                    {{ $payment->bic }}
                </dd>
                <dt class="col-sm-4">Razon</dt>
                <dd class="col-sm-8">
                    {{ $payment->obs2 }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
