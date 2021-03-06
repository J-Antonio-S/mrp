@extends ('layouts.menu')

@section('title', 'Estado | MRP')

@section('styles')
    <style>
      .row {
        text-align: center !important;
        padding-left: 20px;
        padding-right: 20px;
      }

      .info {
        padding-top: 40px;
      }
    </style>
@endsection

@section('contenido-central')
    <div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<h3>Editar Estado(Departamento): {{ $estado->nombre }}</h3>
    		@if (count($errors)>0)
    		<div class="alert alert-danger">
    			<ul>
    			@foreach ($errors->all() as $error)
    				<li>{{ $error }}</li>
    			@endforeach
    			</ul>
    		</div>
    		@endif

            {!! Form::model($estado,['method'=>'PATCH','route'=>['estado.update',$estado->id]])!!}
            {{ Form::token() }}
            <div class="form-group">
            	<label for="codigo">Codigo</label>
            	<input type="text" name="codigo" class="form-control" value="{{ $estado->codigo }}" placeholder="Codigo...">
            </div>
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" value="{{ $estado->nombre }}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!! Form::close() !!}

    	</div>
    </div>
@endsection