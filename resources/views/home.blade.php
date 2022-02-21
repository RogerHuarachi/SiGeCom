@extends('layouts.app')
@section('title')
    <h1 class="m-0">Inicio</h1>
@endsection
@section('browser')
    <li class="breadcrumb-item">Inicio</li>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Bienvenida</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="img-fluid">
                    <img src="{{ asset('dist/img/proeza.jpg') }}" alt="">
                </div>
            </div>
            <p>
                PROEZA - SiGeCom
                <br>
                Sistema de Gestion Comerial
                <br>
                Sistema para evaluacion de clientes
            </p>
        </div>
    </div>
@endsection
