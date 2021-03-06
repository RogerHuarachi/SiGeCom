@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Detalle de Excepciones</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">detalle</li>
@endsection
@section('content')
    @include('option.confirmation')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Excepcion</th>
                                <th>Justificación</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($justifications as $justification)
                                <tr>
                                    <td>{{ $justification->id }}</td>
                                    <td>{{ $justification->client->name }}</td>
                                    <td>{{ $justification->type }}</td>
                                    <td>{{ $justification->justification }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('justifications.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#justificationEdit{{ $justification->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.justifications.edit')
                                            @endcan
                                            @can('justifications.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#justificationDelete{{ $justification->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.justifications.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $justifications->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
