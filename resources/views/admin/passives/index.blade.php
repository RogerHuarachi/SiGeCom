@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Pasivos</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">pasivos</li>
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
                                <th>Tipo</th>
                                <th>Valor</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($passives as $passive)
                                <tr>
                                    <td>{{ $passive->id }}</td>
                                    <td>{{ $passive->client->name }}</td>
                                    <td>{{ $passive->creditor }}</td>
                                    <td>{{ $passive->share }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#passiveShow{{ $passive->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.passives.show')
                                            @can('passives.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#passiveEdit{{ $passive->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.passives.edit')
                                            @endcan
                                            @can('passives.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#passiveDelete{{ $passive->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.passives.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $passives->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
