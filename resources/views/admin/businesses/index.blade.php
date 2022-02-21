@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Actividad Economica</h1>
    </div>

    
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">actividad economica</li>
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
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($businesses as $business)
                                <tr>
                                    <td>{{ $business->id }}</td>
                                    <td>{{ $business->activity }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#businessShow{{ $business->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.businesses.show')
                                            @can('businesses.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#businessEdit{{ $business->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.businesses.edit')
                                            @endcan
                                            @can('businesses.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#businessDelete{{ $business->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.businesses.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $businesses->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
