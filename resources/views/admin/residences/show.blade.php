<div class="modal fade" id="residenceShow{{ $residence->id }}">
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
                <dt class="col-md-4">Tipo de Propiedad</dt>
                <dd class="col-md-8">{{ $residence->property }}</dd>
                <dt class="col-md-4">Tiempo que reside en el lugar</dt>
                <dd class="col-md-8">{{ $residence->time }}</dd>
                <dt class="col-md-4">Dir. Domicilio</dt>
                <dd class="col-md-8">{{ $residence->direction }}</dd>
                <dt class="col-md-4">No.</dt>
                <dd class="col-md-8">{{ $residence->number }}</dd>
                <dt class="col-md-4">Zona/Barrio</dt>
                <dd class="col-md-8">{{ $residence->zone }}</dd>
                <dt class="col-md-4">Teléfono</dt>
                <dd class="col-md-8">{{ $residence->mobile }}</dd>
                <dt class="col-md-4">Provincia/Municipio/Comunidad</dt>
                <dd class="col-md-8">{{ $residence->province }}</dd>
                <dt class="col-md-4">Descripcion</dt>
                <dd class="col-md-8">{{ $residence->description }}</dd>
            </dl>
            <div class="row justify-content-center">
                <div class="img-fluid fa-border">
                    <img src="{{ $residence->file }}" width="300">
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
