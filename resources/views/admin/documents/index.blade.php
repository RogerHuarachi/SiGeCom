@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Documentos</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">documento</li>
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
                                <th>Descripcion</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                                <tr>
                                    <td>{{ $document->id }}</td>
                                    <td>{{ $document->client->name }}</td>
                                    <td>{{ $document->description }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#documentShow{{ $document->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.documents.show')
                                            @can('documents.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#documentEdit{{ $document->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.documents.edit')
                                            @endcan
                                            @can('documents.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#documentDelete{{ $document->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.documents.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $documents->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
