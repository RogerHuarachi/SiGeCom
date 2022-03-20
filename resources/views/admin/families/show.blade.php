<div class="modal fade" id="familyShow{{ $family->id }}">
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
                <dt class="col-sm-4">Cantidad</dt>
                <dd class="col-sm-8">
                    {{ $family->amount }}
                </dd>
                <dt class="col-sm-4">Descripción de Activo</dt>
                <dd class="col-sm-8">
                    {{ $family->description }}
                </dd>
                <dt class="col-sm-4">Valor Comercial</dt>
                <dd class="col-sm-8">
                    {{ $family->value }}
                </dd>
                <dt class="col-sm-4">En Garantia</dt>
                <dd class="col-sm-8">
                    {{ $family->state }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
