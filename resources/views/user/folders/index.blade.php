@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Carpetas</h1>
        @can('folders.store')
            <ol class="breadcrumb float-sm-right pl-1">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#folderCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
        @endcan
    </div>
    @include('user.folders.create')
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">carpetas</li>
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
                                <th>Asesor</th>
                                <th>Cliente</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($folders as $folder)
                                <tr>
                                    <td>{{ $folder->id }}</td>
                                    <td>{{ $folder->user->name }}</td>
                                    <td>
                                        @if ($folder->debtor())
                                            {{ $folder->debtor()->name }}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('usrfolders.show', $folder->id) }}" method="GET">
                                                <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $folders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
