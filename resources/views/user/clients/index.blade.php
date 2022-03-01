@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Clientes</h1>
        @can('clients.store')
            <ol class="breadcrumb float-sm-right pl-1">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#clientCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
        @endcan
    </div>
    @include('admin.clients.create')
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">clientes</li>
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
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->lastName }} {{ $client->name }}</td>
                                    <td>{{ $client->type }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('clients.show', $client->id) }}" method="GET">
                                                <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                            </form>
                                            @can('clients.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#clientEdit{{ $client->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.clients.edit')
                                            @endcan
                                            @can('clients.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#clientDelete{{ $client->id }}"><i class="fas fa-trash-alt"></i></button>
                                                {{-- @include('admin.clients.delete') --}}
                                            @endcan
                                            {{-- <form action="{{ route('clients.show', $client->id) }}" method="GET">
                                                <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                            </form>
                                            <form action="{{ route('clients.edit', $client->id) }}" method="GET">
                                                <button class="btn btn-warning btn-xs" type="submit"><i class="fas fa-edit"></i></button>
                                            </form>
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-xs" type="button" onclick="if(confirm('Deseas continuar?')){ this.form.submit();}"><i class="fas fa-trash-alt"></i></button>
                                            </form> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
