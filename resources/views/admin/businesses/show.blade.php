<div class="modal fade" id="businessShow{{ $business->id }}">
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
                  {{ $business->client->name }}
              </dd>
              <dt class="col-sm-4">CAEDEC</dt>
              <dd class="col-sm-8">
                  {{ $business->caedec->code }} {{ $business->caedec->description }}
              </dd>
              <dt class="col-sm-4">Actividad Especifica</dt>
              <dd class="col-sm-8">
                  {{ $business->activity }}
              </dd>
              <dt class="col-sm-4">Profeción/Ocupación</dt>
              <dd class="col-sm-8">
                  {{ $business->profession }}
              </dd>
              <dt class="col-sm-4">Realizada por</dt>
              <dd class="col-sm-8">
                  {{ $business->responsable }}
              </dd>
              <dt class="col-sm-4">Experiencia en el Rubro</dt>
              <dd class="col-sm-8">
                  {{ $business->experience }}
              </dd>
              <dt class="col-sm-4">Antiguedad del Negocio</dt>
              <dd class="col-sm-8">
                  {{ $business->antiquity }}
              </dd>
              <dt class="col-sm-4">Propiedad del puesto y/o Lugar</dt>
              <dd class="col-sm-8">
                  {{ $business->property }}
              </dd>
            </dl>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
