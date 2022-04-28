@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Observed</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">observeds</li>
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
                                <th>Carpeta</th>
                                @can('observeds.update', 'observeds.destroy')
                                <th>Opciones</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($observeds as $observed)
                                <tr>
                                    <td>{{ $observed->folder->debtor()->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @can('observeds.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#observedDelete{{ $observed->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.observeds.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {!! $observeds->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
