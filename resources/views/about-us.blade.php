@extends('layouts.app')

@section('title', 'Bienvenido a ' . config('app.name'))

@section('body-class', 'about-us')

@section('styles')
    <style>
        
        
    </style>
@endsection

@section('content')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('{{ asset('/img/bg2.jpg') }}'); transform: translate3d(0px, 0px, 0px);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">Acerca de Nosotros</h1>
          <h4>Conozca al increíble equipo detrás de este proyecto, {{config('app.name')}}.</h4>
        </div>
      </div>
    </div>
  </div>

  <div class="main main-raised">
      <div class="container">
        <div class="about-description text-center">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h5 class="description">{{ config('app.name')}} es un sistema que te permite gestionar el control y la coordinación de los materiales, para que ek proceso productivo los tenga disponibles, cuando se los requiere y en las cantidades necesarias.</h5>
            </div>
          </div>
        </div>
        <div class="about-team team-1">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Desarrolladores actuales</h2>
              <h5 class="description">Son pocos, pero la calidad salta a brillar.</h5>
            </div>
          </div>
          <div class="row">

            <div class="col-md-3">
              <div class="card card-profile card-plain">
                <div class="card-avatar">
                  <a href="#">
                    <img class="img" src="{{'/img/faces/christian.jpg'}}">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Andres Justiniano</h4>
                  <h6 class="category text-muted">Programador principal</h6>
                  <p class="card-description">
                    Programador a cargo de la fase inicial del proyecto, y diseño de la pantalla principal.
                  </p>
                </div>
                <div class="card-footer justify-content-center">
                  <a href="#" class="btn btn-just-icon btn-link btn-twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-just-icon btn-link btn-facebook">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#" class="btn btn-just-icon btn-link btn-google">
                    <i class="fa fa-google"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card card-profile card-plain">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{'/img/faces/marc.jpg'}}">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Sergio Terrazas </h4>
                  <h6 class="category text-muted">Master Scrum </h6>
                  <p class="card-description">
                    Master scrum de todo el sistema, conoce todo, resuelve bugs y pone otros.
                  </p>
                </div>
                <div class="card-footer justify-content-center">
                  <a href="#" class="btn btn-just-icon btn-link btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card card-profile card-plain">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{'/img/faces/card-profile1-square.jpg'}}">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Juan Daniel Pacheco </h4>
                  <h6 class="category text-muted">Programador  </h6>
                  <p class="card-description">
                    Programador de los modelos, vistas y controladores del sistema.
                  </p>
                </div>
                <div class="card-footer justify-content-center">
                  <a href="#" class="btn btn-just-icon btn-link btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card card-profile card-plain">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{'/img/faces/card-profile2-square.jpg'}}">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Luismar Pelayo Tapia </h4>
                  <h6 class="category text-muted">Programador </h6>
                  <p class="card-description">
                  Programador de los modelos, vistas y controladores del sistema.
                  </p>
                </div>
                <div class="card-footer justify-content-center">
                  <a href="#" class="btn btn-just-icon btn-link btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card card-profile card-plain">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{'/img/faces/card-profile4-square.jpg'}}">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Juan Antonio Pesoa </h4>
                  <h6 class="category text-muted">Programador </h6>
                  <p class="card-description">
                  Programador de los modelos, vistas y controladores del sistema.
                  </p>
                </div>
                <div class="card-footer justify-content-center">
                  <a href="#" class="btn btn-just-icon btn-link btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card card-profile card-plain">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{'/img/faces/card-profile5-square.jpg'}}">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Jhaneth Celene Velasquez </h4>
                  <h6 class="category text-muted">Programador </h6>
                  <p class="card-description">
                  Programador de los modelos, vistas y controladores del sistema.
                  </p>
                </div>
                <div class="card-footer justify-content-center">
                  <a href="#" class="btn btn-just-icon btn-link btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="about-services features-2">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Sistemas {{config('app.name')}}</h2>
              <h5 class="description">{{config('app.name')}} ofrece gestionar los procesos de producción dentro de una empresa.</h5>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="info info-horizontal">
                <div class="icon icon-rose">
                  <i class="material-icons">gesture</i>
                </div>
                <div class="description">
                  <h4 class="info-title">1. Lista de Materiales</h4>
                  <p>La lista de materiales se construye por niveles comenzando desde nivel 0 hasta nivel n.</p>
                  <a href="#">Ejemplo</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="info info-horizontal">
                <div class="icon icon-rose">
                  <i class="material-icons">bookmarks</i>
                </div>
                <div class="description">
                  <h4 class="info-title">2. Ficha Técnica</h4>
                  <p>Vista técnica de los productos dentro de la empresa, con su cantidad disponible de por unidad.</p>
                  <a href="#">Ejemplo</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="info info-horizontal">
                <div class="icon icon-rose">
                  <i class="material-icons">payment</i>
                </div>
                <div class="description">
                  <h4 class="info-title">3. Planeación MPS </h4>
                  <p>Programa de producción en el que se decide cuando y cuanto fabricar de un producto.</p>                  
                  <a href="#">Ejemplo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

@include('includes.footer')
@endsection
