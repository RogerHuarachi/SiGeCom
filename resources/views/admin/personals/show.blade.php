<div class="modal fade text-dark" id="personalShow{{ $personal->id }}">
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
              <dt class="col-sm-4">Nombre de Cliente</dt>
              <dd class="col-sm-8">
                  {{ $personal->client->name }}
              </dd>
              <dt class="col-sm-4">Tipo de Cliente</dt>
              <dd class="col-sm-8">
                  {{ $personal->client->type }}
              </dd>
              <dt class="col-sm-4">Nombre</dt>
              <dd class="col-sm-8">
                  {{ $personal->name }}
              </dd>
              <dt class="col-sm-4">Direccion</dt>
              <dd class="col-sm-8">
                  {{ $personal->address }}
              </dd>
              <dt class="col-sm-4">Telefono Movil</dt>
              <dd class="col-sm-8">
                  {{ $personal->mobile }}
              <dt class="col-sm-4">Vinculo</dt>
              <dd class="col-sm-8">
                  {{ $personal->link }}
              </dd>
              </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
