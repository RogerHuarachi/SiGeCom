<div class="modal fade text-dark" id="dgeShow{{ $dge->id }}">
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
                <dt class="col-sm-4">Lugar/Empresa de trabajo</dt>
                <dd class="col-sm-8">
                    {{ $dge->business }}
                </dd>
                <dt class="col-sm-4">Cargo</dt>
                <dd class="col-sm-8">
                    {{ $dge->position }}
                </dd>
                <dt class="col-sm-4">Empleador</dt>
                <dd class="col-sm-8">
                    {{ $dge->employer }}
                </dd>
                <dt class="col-sm-4">Fecha de conversación</dt>
                <dd class="col-sm-8">
                    {{ $dge->date }}
                </dd>
                <dt class="col-sm-4">Fecha de pago de salario</dt>
                <dd class="col-sm-8">
                    {{ $dge->payment }}
                </dd>
                <dt class="col-sm-4">Antiguedad Años</dt>
                <dd class="col-sm-8">
                    {{ $dge->year }}
                </dd>
                <dt class="col-sm-4">Meses</dt>
                <dd class="col-sm-8">
                    {{ $dge->month }}
                </dd>
                <dt class="col-sm-4">Fecha de conversación</dt>
                <dd class="col-sm-8">
                    {{ $dge->date }}
                </dd>
                <dt class="col-sm-4">Hijos dependientes</dt>
                <dd class="col-sm-8">
                    {{ $dge->son }}
                </dd>
                <dt class="col-sm-4">Otros dependientes</dt>
                <dd class="col-sm-8">
                    {{ $dge->other }}
                </dd>
                <dt class="col-sm-4">Descripción</dt>
                <dd class="col-sm-8">
                    {{ $dge->description }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
