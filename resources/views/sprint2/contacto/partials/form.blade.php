<div class="form-group">
	{{ Form::label('nombre', 'Nombre:') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('cargo', 'Cargo:') }}
	{{ Form::text('cargo', null, ['class' => 'form-control', 'id' => 'cargo']) }}
</div>
<div class="form-group">
	{{ Form::label('telefono', 'Teléfono:') }}
	{{ Form::tel('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
</div>
<div class="form-group">
	{{ Form::label('celular', 'Celular:') }}
	{{ Form::tel('celular', null, ['class' => 'form-control', 'id' => 'celular']) }}
</div>
<div class="form-group">
	{{ Form::label('correo', 'Correo Electrónico:') }}
	{{ Form::email('correo', null, ['class' => 'form-control ', 'id' => 'correo']) }}
</div>
<div class="form-group">
	{{ Form::label('nota', 'Nota:') }}
	{{ Form::textarea('nota', null, ['class' => 'form-control', 'rows' => '1', 'id' => 'nota']) }}
</div>

<div class="form-group">
    {{Form::label('id_proveedor','Seleccionar Proveedor: ')}}
    <select name="id_proveedor" id="id_proveedor">Seleccionar Proveedor
        @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}" 
				
			>
                {{$proveedor->nombre}}
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