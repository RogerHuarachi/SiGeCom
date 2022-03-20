<div class="modal fade" id="gmvShow{{ $gmv->id }}">
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
                <dt class="col-sm-4">Item</dt>
                <dd class="col-sm-8">
                    {{ $gmv->item }}
                </dd>
                <dt class="col-sm-4">Cantidad</dt>
                <dd class="col-sm-8">
                    {{ $gmv->amount }}
                </dd>
                <dt class="col-sm-4">Precio Unitario</dt>
                <dd class="col-sm-8">
                    {{ $gmv->price }}
                </dd>
                <dt class="col-sm-4">Total</dt>
                <dd class="col-sm-8">
                    {{ $gmv->total }}
                </dd>
                <dt class="col-sm-4">Frecuencia</dt>
                <dd class="col-sm-8">
                    {{ $gmv->frequency }}
                </dd>
                <dt class="col-sm-4">Total Mensual</dt>
                <dd class="col-sm-8">
                    {{ $gmv->totalmes }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
