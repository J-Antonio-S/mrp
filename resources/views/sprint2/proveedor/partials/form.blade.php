<div class="form-group">
	{{ Form::label('codigo', 'Código:') }}
	{{ Form::text('codigo', null, ['class' => 'form-control', 'id' => 'codigo']) }}
</div>
<div class="form-group">
	{{ Form::label('nombre', 'Nombre:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('direccion', 'Dirección:') }}
	{{ Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) }}
</div>
<div class="form-group">
	{{ Form::label('correo', 'Correo Electrónico:') }}
	{{ Form::email('correo', null, ['class' => 'form-control ', 'id' => 'correo']) }}
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Teléfono:') }}
	{{ Form::tel('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
</div>
<div class="form-group">
	{{ Form::label('imagen', 'Foto:') }}
	{{ Form::text('imagen', null, ['class' => 'form-control', 'id' => 'imagen']) }}
</div>

<div class="form-group">
    {{Form::label('id_municipio','Seleccionar Municipio: ')}}
    <select name="id_municipio" id="id_municipio">Seleccionar Municipio
        @foreach($municipios as $municipio)
            <option value="{{ $municipio->id }}" 
				
			>
                {{$municipio->nombre}}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
	{{ Form::label('estado', 'Estado:') }}
	{{ Form::select('estado', ['1'=>'Activo','0'=>'Inactivo'], ['multiple class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>