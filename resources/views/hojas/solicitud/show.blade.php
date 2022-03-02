@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0">Solicitud</h1>
    </div>
    {{-- @include('user.deudors.create') --}}
@endsection
@section('browser')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">inicio</a></li>
    <li class="breadcrumb-item">Capeta</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Datos del solicitante
                        {{-- @if (!$client->personal) --}}
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#deudorCreate"><i class="fas fa-plus"></i></button>
                        {{-- @endif --}}
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Refencia
                        {{-- @if (!$client->personal) --}}
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#deudorCreate">Personal</button>
                        {{-- @endif --}}
                        {{-- @if (!$client->personal) --}}
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#deudorCreate">Comercial</button>
                        {{-- @endif --}}
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

