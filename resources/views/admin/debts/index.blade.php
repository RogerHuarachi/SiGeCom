@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Endeudamiento</h1>
    </div>
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">endeudamiento</li>
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
                                <th>Entidad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($debts as $debt)
                                <tr>
                                    <td>{{ $debt->id }}</td>
                                    <td>{{ $debt->client->name }}</td>
                                    <td>{{ $debt->entity }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#debtShow{{ $debt->id }}"><i class="fas fa-eye"></i></button>
                                            @include('admin.debts.show')
                                            @can('debts.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#debtEdit{{ $debt->id }}"><i class="fas fa-pen"></i></button>
                                                @include('admin.debts.edit')
                                            @endcan
                                            @can('debts.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#debtDelete{{ $debt->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('admin.debts.delete')
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tfoot>
                    </table>
                    {{ $debts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
