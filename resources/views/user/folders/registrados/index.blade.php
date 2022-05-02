@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Mis Carpetas</h1>
        @can('folders.store')
            <ol class="breadcrumb float-sm-right pl-2">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#folderCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
        @endcan
    </div>
    @include('user.folders.create')
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">folders</li>
@endsection
@section('content')
    @include('option.confirmation')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    {{-- <table id="example1" class="table table-bordered table-striped table-sm"> --}}
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
                                <th>Alerta</th>
                                <th>Opc</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($folders as $folder)
                                <tr>
                                    <td>{{ $folder->id }}</td>
                                    <td>
                                        @if ($folder->debtor())
                                            {{ $folder->debtor()->name }}
                                        @endif
                                    </td>
                                    <td>{{ $folder->user->name }}</td>
                                    @if ($folder->assign)
                                        <td>{{ $folder->assign->user->name }}</td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td>
                                        @if ($folder->observed)
                                            <span class="badge bg-warning">obs</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($folder->approved)
                                            <span class="badge bg-success">apr</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($folder->rejected)
                                            <span class="badge bg-danger">rec</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($folder->disbursement)
                                            <span class="badge bg-success">des</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($folder->rejected)
                                            <span class="badge bg-success"><i class="fas fa-thumbs-up"></i></span>
                                        @elseif ($folder->disbursement)
                                            <?php
                                            $date1=new DateTime($folder->created_at);
                                            $date2=new DateTime($folder->disbursement->created_at);
                                            $diff=date_diff($date1,$date2);
                                            ?>
                                            @if ($diff->format("%R%a") > 3)
                                                <span class="badge bg-danger">{{ $diff->format("%R%a dias") }}</span>
                                            @else
                                                <span class="badge bg-success"><i class="fas fa-thumbs-up"></i></span>
                                            @endif
                                        @else
                                            <?php
                                            $date1=new DateTime($folder->created_at);
                                            $date2=new DateTime('now');
                                            $diff=date_diff($date1,$date2);
                                            ?>
                                            @if ($diff->format("%R%a") == 2)
                                                <span class="badge bg-warning">{{ $diff->format("%R%a dias") }}</span>
                                            @elseif ($diff->format("%R%a") > 2)
                                                <span class="badge bg-danger">{{ $diff->format("%R%a dias") }}</span>
                                            @else
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('usrfolders.show', $folder->id) }}" method="GET">
                                                <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-eye"></i></button>
                                            </form>
                                        </div>
                                        <div class="btn-group">
                                            @if (!$folder->assign)
                                                <form action="{{ route('usrassigns.store', $folder->id) }}" method="GET">
                                                    <button class="btn btn-info btn-xs" type="submit"><i class="fas fa-paper-plane"></i></button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {!! $folders->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
