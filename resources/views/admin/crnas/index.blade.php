@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Detalle de Aclaración</h1>
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
                            @foreach ($members as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->client->name }}</td>
                                    <td>{{ $member->aclaration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('members.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#memberEdit{{ $member->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.members.edit')
                                            @endcan
                                            @can('members.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#memberDelete{{ $member->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.members.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $members->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
