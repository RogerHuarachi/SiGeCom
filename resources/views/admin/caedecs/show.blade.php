<div class="modal fade text-dark" id="caedecShow{{ $caedec->id }}">
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
                <dt class="col-sm-4">Categoria</dt>
                <dd class="col-sm-8">
                    {{ $caedec->category }}
                </dd>
                <dt class="col-sm-4">Rubro</dt>
                <dd class="col-sm-8">
                    {{ $caedec->heading }}
                </dd>
                <dt class="col-sm-4">Código</dt>
                <dd class="col-sm-8">
                    {{ $caedec->code }}
                </dd>
                <dt class="col-sm-4">Descripción</dt>
                <dd class="col-sm-8">
                    {{ $caedec->description }}
                </dd>
                <dt class="col-sm-4">Nota Explicativa</dt>
                <dd class="col-sm-8">
                    {{ $caedec->note }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
