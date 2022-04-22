<div class="modal fade text-dark" id="mubShow{{ $mub->id }}">
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
                <dt class="col-sm-4">Detalle</dt>
                <dd class="col-sm-8">
                    {{ $mub->detail }}
                </dd>
                <dt class="col-sm-4">Cantidad</dt>
                <dd class="col-sm-8">
                    {{ $mub->amount }}
                </dd>
                <dt class="col-sm-4">Unidad</dt>
                <dd class="col-sm-8">
                    {{ $mub->unity }}
                </dd>
                <dt class="col-sm-4">Frecuencia</dt>
                <dd class="col-sm-8">
                    {{ $mub->frequency }}
                </dd>
                <dt class="col-sm-4">Precio de Compra</dt>
                <dd class="col-sm-8">
                    {{ $mub->buy }}
                </dd>
                <dt class="col-sm-4">Precio de Venta</dt>
                <dd class="col-sm-8">
                    {{ $mub->sale }}
                </dd>
                <dt class="col-sm-4">buysMonth</dt>
                <dd class="col-sm-8">
                    {{ $mub->buysMonth }}
                </dd>
                <dt class="col-sm-4">Venta Mensual</dt>
                <dd class="col-sm-8">
                    {{ $mub->saleMonth }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
