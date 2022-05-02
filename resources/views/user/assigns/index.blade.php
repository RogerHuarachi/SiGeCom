@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Carpetas Asignadas</h1>
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
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Asesor</th>
                                <th>Encargado</th>
                                <th>Obs</th>
                                <th>Apr</th>
                                <th>Rec</th>
                                <th>Des</th>
                                <th>Opc</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assigns as $assign)
                                <tr>
                                    <td>{{ $assign->folder->id }}</td>
                                    <td>{{ $assign->folder->debtor()->name }} {{ $assign->folder->debtor()->lastName }}</td>
                                    <td>{{ $assign->folder->user->name }}</td>
                                    <td>{{ $assign->folder->assign->user->name }}</td>
                                    <td>
                                        @if ($assign->folder->observed)
                                            <span class="badge bg-warning">obs</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($assign->folder->approved)
                                            <span class="badge bg-success">apr</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($assign->folder->rejected)
                                            <span class="badge bg-danger">rec</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($assign->folder->disbursement)
                                            <span class="badge bg-success">des</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            @can('assigns.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#assignEdit{{ $assign->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.assigns.edit')
                                            @endcan
                                        </div>
                                        <div class="btn-group">
                                            @can('observeds.store')
                                                @if (!$assign->folder->observed && !$assign->folder->rejected && !$assign->folder->approved)
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#observedCreate{{ $assign->folder->id }}"><i class="far fa-question-circle"></i></button>
                                                    @include('user.observeds.create')
                                                @endif
                                            @endcan
                                            @can('approveds.store')
                                                @if (!$assign->folder->approved && !$assign->folder->rejected)
                                                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#approvedCreate{{ $assign->folder->id }}"><i class="far fa-check-square"></i></button>
                                                    @include('user.approveds.create')
                                                @endif
                                            @endcan
                                            @can('rejecteds.store')
                                                @if (!$assign->folder->rejected && !$assign->folder->approved)
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#rejectedCreate{{ $assign->folder->id }}"><i class="far fa-window-close"></i></button>
                                                    @include('user.rejecteds.create')
                                                @endif
                                            @endcan
                                        </div>
                                        <div class="btn-group">
                                            <form action="{{ route('usrfolders.show', $assign->folder->id) }}" method="GET">
                                                <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $assigns->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
