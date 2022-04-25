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
                        <div class="col-md-6">
                            <label for="">FORMULARIO EVALUACION </label>
                            <div class="row d-flex justify-content-center">
                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                    <form action="{{ route('usrfoldersI.indep', $folder->id) }}" method="GET">
                                        <button class="btn btn-primary btn-lg" type="submit">INDEPENDIENTE</button>
                                    </form>

                                    <form action="{{ route('usrfoldersAFI.asal', $folder->id) }}" method="GET">
                                        <button class="btn btn-info btn-lg" type="submit">ASALARIADOS FORMALES E INFORMALES</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">FORMULARIO EVALUACION GARANTE</label>
                            <div class="row d-flex justify-content-center">
                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                    <form action="{{ route('usrfoldersGI.indepG', $folder->id) }}" method="GET">
                                        <button class="btn btn-primary btn-lg" type="submit">INDEPENDIENTE</button>
                                    </form>

                                    <form action="{{ route('usrfoldersGAFI.asalG', $folder->id) }}" method="GET">
                                        <button class="btn btn-info btn-lg" type="submit">ASALARIADOS FORMALES E INFORMALES</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

