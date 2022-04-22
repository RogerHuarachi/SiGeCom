<div class="modal fade text-dark" id="childShow{{ $child->id }}">
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
                <dt class="col-sm-4">Edad</dt>
                <dd class="col-sm-8">
                    {{ $child->age }}
                </dd>
                <dt class="col-sm-4">Sexo</dt>
                <dd class="col-sm-8">
                    {{ $child->gender }}
                </dd>
                <dt class="col-sm-4">Estudia</dt>
                <dd class="col-sm-8">
                    {{ $child->student }}
                </dd>
                <dt class="col-sm-4">Donde</dt>
                <dd class="col-sm-8">
                    {{ $child->where }}
                </dd>
                <dt class="col-sm-4">Tipo de Entidad</dt>
                <dd class="col-sm-8">
                    {{ $child->type }}
                </dd>
                <dt class="col-sm-4">Otras Actividades</dt>
                <dd class="col-sm-8">
                    {{ $child->other }}
                </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
