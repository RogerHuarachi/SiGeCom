@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Datos Generales de la Empresa</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">Datos</li>
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
                                <th>Liquido disponibre</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($icos as $ico)
                                <tr>
                                    <td>{{ $ico->id }}</td>
                                    <td>{{ $ico->client->name }}</td>
                                    <td>{{ $ico->ld }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#icoShow{{ $ico->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.icos.show')
                                            @can('icos.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#icoEdit{{ $ico->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.icos.edit')
                                            @endcan
                                            @can('icos.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#icoDelete{{ $ico->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.icos.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $icos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
