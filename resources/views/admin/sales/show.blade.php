<div class="modal fade" id="saleShow{{ $sale->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Comportamiento</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <dl class="row">
              <dt class="col-sm-4">Tipo de bien</dt>
              <dd class="col-sm-8">
                  {{ $sale->type }}
              </dd>
              <dt class="col-sm-4">Dia</dt>
              <dd class="col-sm-8">
                  {{ $sale->item }}
              </dd>
              <dt class="col-sm-4">Monto</dt>
              <dd class="col-sm-8">
                  {{ $sale->money }}
              </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
