@extends('layouts.app')
@section('title')
    <div class="row">
        <h1 class="m-0 pr-1">Capeta</h1>
    </div>
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
                        Formularios
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form class="p-1" action="{{ route('usrsolicitud.sol', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Solicitud</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Croquis</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Avaluo de Bienes</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">D. Patrimonial</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Evaluacion Soc.</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Hoja de Costo</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Inventario Act. Prim</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Inventario Act. Sec.</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Av. Garantia Premdaria</button>
                        </form>
                        <form class="p-1" action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                            <button class="btn btn-primary btn-lg" type="submit">Recp. de Doc.</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

