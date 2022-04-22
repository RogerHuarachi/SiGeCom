<div class="modal fade text-dark" id="oiShow{{ $oi->id }}">
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
                <dt class="col-sm-4">Descripción</dt>
                <dd class="col-sm-8">
                    {{ $oi->item }}
                </dd>
                <dt class="col-sm-4">Ingesos Brutos</dt>
                <dd class="col-sm-8">
                    {{ $oi->ib }}
                </dd>
                <dt class="col-sm-4">Desc./ Gastos</dt>
                <dd class="col-sm-8">
                    {{ $oi->dg }}
                </dd>
                <dt class="col-sm-4">Total</dt>
                <dd class="col-sm-8">
                    {{ $oi->total }}
                </dd>
                <dt class="col-sm-4">Aclaración</dt>
                <dd class="col-sm-8">
                    {{ $oi->description }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
