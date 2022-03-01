@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Personal Percibe Salario Incluye Familia</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">salario</li>
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
                                <th>Item</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ppsifs as $ppsif)
                                <tr>
                                    <td>{{ $ppsif->id }}</td>
                                    <td>{{ $ppsif->client->name }}</td>
                                    <td>{{ $ppsif->item }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ppsifShow{{ $ppsif->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.ppsifs.show')
                                            @can('ppsifs.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#ppsifEdit{{ $ppsif->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.ppsifs.edit')
                                            @endcan
                                            @can('ppsifs.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ppsifDelete{{ $ppsif->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.ppsifs.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $ppsifs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
