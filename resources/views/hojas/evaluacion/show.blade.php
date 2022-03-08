@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Solicitud de Préstamo</h1>
    </div>
@endsection
@section('content')
@include('admin.children.create')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Descripcion de la unidad familiar
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#childCreate"><i class="fas fa-plus"></i></button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            @if ($client->children)
                <div class="card-body">
                    <div class="row">
                        <table class="table table-sm table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Estudia</th>
                                    <th>Donde</th>
                                    <th>Tipo de Entidad</th>
                                    <th>Otras Actividades</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client->children as $child)
                                    <tr>
                                        <td>{{ $child->age }}</td>
                                        <td>{{ $child->gender }}</td>
                                        <td>{{ $child->student }}</td>
                                        <td>{{ $child->where }}</td>
                                        <td>{{ $child->type }}</td>
                                        <td>{{ $child->other }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
