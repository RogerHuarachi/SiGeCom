<div class="modal fade text-dark" id="passiveShow{{ $passive->id }}">
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
                <dt class="col-sm-4">Nombre del Banco u otro Acreedor</dt>
                <dd class="col-sm-8">
                    {{ $passive->creditor }}
                </dd>
                <dt class="col-sm-4">Cuota Mensual</dt>
                <dd class="col-sm-8">
                    {{ $passive->share }}
                </dd>
                <dt class="col-sm-4">Saldo Deudor</dt>
                <dd class="col-sm-8">
                    {{ $passive->balace }}
                </dd>
                <dt class="col-sm-4">Estado</dt>
                <dd class="col-sm-8">
                    {{ $passive->state }}
                </dd>
                <dt class="col-sm-4">Saldo Mensual Final</dt>
                <dd class="col-sm-8">
                    {{ $passive->value }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
