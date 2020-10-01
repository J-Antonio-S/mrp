
<div class="form-group">
	{{ Form::label('codigo', 'Codigo:') }}
	{{ Form::text('codigo', null, ['class' => 'form-control','id' => 'codigo']) }}
</div>
<div class="form-group">
    {{Form::label('almacen_id','Seleccionar Almacén: ')}}
    <select name="almacen_id" id="almacen_id">Seleccionar Almacén
        @foreach($almacenes as $almacen)
            <option value="{{ $almacen->id }}"
				@if( $almacen->id === $inventario->almacen_id)
					selected
				@endif
				>
				{{$almacen->nombre}}
			</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {{Form::label('tipo_mov_id','Seleccionar Tipo de Movimiento: ')}}
    <select name="tipo_mov_id" id="tipo_mov_id">Seleccionar Tipo Mov
        @foreach($tipo_movimiento as $tipo)
            <option value="{{ $tipo->id }}"
				@if( $tipo->id === $inventario->tipo_mov_id)
					selected
				@endif
				>
				{{$tipo->nombre}}
			</option>
        @endforeach
    </select>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>