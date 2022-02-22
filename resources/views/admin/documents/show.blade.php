<div class="modal fade" id="documentShow{{ $document->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Documento</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <dl class="row">
                <dt class="col-sm-4">Tipo de Documento</dt>
                <dd class="col-sm-8">
                    {{ $document->type }}
                </dd>
                <dt class="col-sm-4">Descripcion</dt>
                <dd class="col-sm-8">
                    {{ $document->description }}
                </dd>
                <dt class="col-sm-4">N° Doc</dt>
                <dd class="col-sm-8">
                    {{ $document->doc }}
                </dd>
                <dt class="col-sm-4">N° de Fojas</dt>
                <dd class="col-sm-8">
                    {{ $document->fojas }}
                </dd>
                <dt class="col-sm-4">Observacion</dt>
                <dd class="col-sm-8">
                    {{ $document->obs }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
