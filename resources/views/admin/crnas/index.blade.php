@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Recomendaciones</h1>
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
                                <th>Cliente</th>
                                <th>Aclaración</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($crnas as $crna)
                                <tr>
                                    <td>{{ $crna->id }}</td>
                                    <td>{{ $crna->client->name }}</td>
                                    <td>{{ $crna->aclaration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('crnas.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#crnaEdit{{ $crna->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.crnas.edit')
                                            @endcan
                                            @can('crnas.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#crnaDelete{{ $crna->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.crnas.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $crnas->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
