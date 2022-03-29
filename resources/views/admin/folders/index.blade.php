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
    @include('admin.folders.create')
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
                                            @can('folders.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#folderEdit{{ $folder->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.folders.edit')
                                            @endcan
                                            @can('folders.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#folderDelete{{ $folder->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.folders.delete')
                                            @endcan
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

@section('script')
<script>
function mostrar(id) {
    if (id == "Nuevo") {
        $("#mca").hide();
        $("#sca").hide();
        $("#rt").hide();
    }

    if (id == "Paralelo") {
        $("#mca").hide();
        $("#sca").show();
        $("#rt").show();
    }

    if (id == "Represtamo") {
        $("#mca").show();
        $("#sca").hide();
        $("#rt").hide();
    }

    if (id == "Financiamiento") {
        $("#mca").hide();
        $("#sca").show();
        $("#rt").hide();
    }

    if (id == "Reprogramación") {
        $("#mca").hide();
        $("#sca").show();
        $("#rt").hide();
    }
}
</script>
@endsection
