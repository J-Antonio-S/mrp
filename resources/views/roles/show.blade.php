@extends('layouts.settings')

@section('title', 'Rol ' . $role->name)

@section('body-class', 'landing-page')

@section('styles')
    <style>

        .tarjeta {
            display:flex;
            justify-content: center !important;
        }
        .card {
            
            width: 100%;
        }

    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

        <div class="section">

            <div class="tarjeta">
            <div class="card card-nav-tabs text-center">
                <div class="card-header card-header-primary text-capitalize">
                    Rol {{ $role->name }}
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $role->slug }}</h4>
                    <p class="card-text">{{ $role->description }}</p>
                </div>
                <div class=" text-muted">
                    {{ $role->slug }}
                </div>
            </div>
            </div>

        </div>

    </div>
        
</div>

@include('includes.footer')
@endsection