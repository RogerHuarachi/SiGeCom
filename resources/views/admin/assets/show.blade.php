<div class="modal fade" id="assetShow{{ $asset->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Activo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <dl class="row">
                <dt class="col-sm-4">Tipo de Bien</dt>
                <dd class="col-sm-8">
                    {{ $asset->type }}
                </dd>
                <dt class="col-sm-4">En Garantia</dt>
                <dd class="col-sm-8">
                    {{ $asset->warranty }}
                </dd>
                <dt class="col-sm-4">Valor</dt>
                <dd class="col-sm-8">
                    {{ $asset->value }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
