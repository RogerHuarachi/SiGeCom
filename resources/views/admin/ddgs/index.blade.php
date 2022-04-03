@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Detalle de Garatias</h1>
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
                                <th>Garantia</th>
                                <th>VC</th>
                                <th>MC</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ddgs as $ddg)
                                <tr>
                                    <td>{{ $ddg->id }}</td>
                                    <td>{{ $ddg->client->name }}</td>
                                    <td>{{ $ddg->garanty }}</td>
                                    <td>{{ $ddg->vc }}</td>
                                    <td>{{ $ddg->mc }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('ddgs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ddgEdit{{ $ddg->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.ddgs.edit')
                                            @endcan
                                            @can('ddgs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ddgDelete{{ $ddg->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.ddgs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $ddgs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
