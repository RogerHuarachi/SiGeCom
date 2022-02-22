<div class="modal fade" id="itemShow{{ $item->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de itemo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <dl class="row">
                <dt class="col-sm-4">Nombre</dt>
                <dd class="col-sm-8">
                    {{ $item->name }}
                </dd>
                <dt class="col-sm-4">Cantidad</dt>
                <dd class="col-sm-8">
                    {{ $item->amount }}
                </dd>
                <dt class="col-sm-4">Unidad</dt>
                <dd class="col-sm-8">
                    {{ $item->unit }}
                </dd>
                <dt class="col-sm-4">Rendimiento</dt>
                <dd class="col-sm-8">
                    {{ $item->performance }}
                </dd>
                <dt class="col-sm-4">Precio U</dt>
                <dd class="col-sm-8">
                    {{ $item->price }}
                </dd>
                <dt class="col-sm-4">Total</dt>
                <dd class="col-sm-8">
                    {{ $item->total }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
