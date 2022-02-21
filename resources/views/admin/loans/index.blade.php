@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Prestamos</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">prestamos</li>
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
                                <th>Monto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($loans as $loan)
                                <tr>
                                    <td>{{ $loan->id }}</td>
                                    <td>{{ $loan->client->name }}</td>
                                    <td>{{ $loan->money }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#loanShow{{ $loan->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.loans.show')
                                            @can('loans.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#loanEdit{{ $loan->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.loans.edit')
                                            @endcan
                                            @can('loans.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#loanDelete{{ $loan->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.loans.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $loans->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
