<div class="modal fade" id="workShow{{ $work->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Bien</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <dl class="row">
                <dt class="col-sm-4">Tipo de bien</dt>
                <dd class="col-sm-8">
                    {{ $work->type }}
                </dd>
                <dt class="col-sm-4">Cantidad</dt>
                <dd class="col-sm-8">
                    {{ $work->amount }}
                </dd>
                <dt class="col-sm-4">Descripción de Activo</dt>
                <dd class="col-sm-8">
                    {{ $work->description }}
                </dd>
                <dt class="col-sm-4">Valor Comercial</dt>
                <dd class="col-sm-8">
                    {{ $work->value }}
                </dd>
                <dt class="col-sm-4">Actividad</dt>
                <dd class="col-sm-8">
                    {{ $work->exercise }}
                </dd>
                <dt class="col-sm-4">En Garantia</dt>
                <dd class="col-sm-8">
                    {{ $work->state }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
