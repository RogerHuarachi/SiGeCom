<div class="modal fade text-dark" id="icoShow{{ $ico->id }}">
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
                <dt class="col-sm-4">Salario Bruto</dt>
                <dd class="col-sm-8">
                    {{ $ico->sb }}
                </dd>
                <dt class="col-sm-4">Aporte de ley</dt>
                <dd class="col-sm-8">
                    {{ $ico->al }}
                </dd>
                <dt class="col-sm-4">Otros descuentos</dt>
                <dd class="col-sm-8">
                    {{ $ico->od }}
                </dd>
                <dt class="col-sm-4">Otros ingresos</dt>
                <dd class="col-sm-8">
                    {{ $ico->oi }}
                </dd>
                <dt class="col-sm-4">Liquido disponibre</dt>
                <dd class="col-sm-8">
                    {{ $ico->ld }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
