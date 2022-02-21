<div class="modal fade" id="jobShow{{ $job->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Croquis de Domicilio</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <dl class="row">
                <dt class="col-md-4">Tipo de Propiedad</dt>
                <dd class="col-md-8">{{ $job->property }}</dd>
                <dt class="col-md-4">Tiempo que reside en el lugar</dt>
                <dd class="col-md-8">{{ $job->time }}</dd>
                <dt class="col-md-4">Tipo de Negocio</dt>
                <dd class="col-md-8">{{ $job->business }}</dd>
                <dt class="col-md-4">Aclaracion</dt>
                <dd class="col-md-8">{{ $job->note }}</dd>
                <dt class="col-md-4">Dir. Domicilio</dt>
                <dd class="col-md-8">{{ $job->direction }}</dd>
                <dt class="col-md-4">No.</dt>
                <dd class="col-md-8">{{ $job->number }}</dd>
                <dt class="col-md-4">Zona/Barrio</dt>
                <dd class="col-md-8">{{ $job->zone }}</dd>
                <dt class="col-md-4">Teléfono</dt>
                <dd class="col-md-8">{{ $job->mobile }}</dd>
                <dt class="col-md-4">Provincia/Municipio/Comunidad</dt>
                <dd class="col-md-8">{{ $job->province }}</dd>
                <dt class="col-md-4">Descripcion</dt>
                <dd class="col-md-8">{{ $job->description }}</dd>
            </dl>
            <div class="row justify-content-center">
                <div class="img-fluid fa-border">
                    <img src="{{ $job->file }}" width="300">
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
