<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Departamento;
use App\Sucursal;
use App\Cargo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmpleadoController extends Controller
{

    public function index()
    {
        $empleados = Empleado::where('eliminado',false)->paginate();

        return view('sprint1/empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos  = Departamento::All()->orderBy('nombre', 'desc');
        $sucursales     = Sucursal::All()->orderBy('descripcion', 'desc');
        $cargos         = Cargo::All()->orderBy('nombre', 'desc');

        return view('sprint1/empleados.create', compact('departamentos', 'sucursales', 'cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = Empleado::create($request->all());

        return redirect()->route('empleados.show', $empleado->id)
            ->with('info', 'Empleado guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('sprint1/empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);

        return view('sprint1/empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        $empleado->codigo = $request->input('codigo');
        $empleado->cedula = $request->input('cedula');
        $empleado->nombre = $request->input('nombre');
        $empleado->direccion = $request->input('direccion');
        $empleado->email = $request->input('email');
        $empleado->edad = $request->input('edad');
        $empleado->fecha_nac = $request->input('fecha_nac');
        $empleado->telefono = $request->input('telefono');
        $empleado->foto = $request->input('foto');
        
        $empleado->id_departamento = $request->input('id_departamento');
        $empleado->id_sucursal = $request->input('id_sucursal');
        $empleado->id_cargo = $request->input('id_cargo');



        $empleado->estado = $request->input('estado');
        $empleado->save();

        return redirect()->route('empleados.edit', $empleado->id)
            ->with('info', 'Empleado guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensaje = Empleado::find($id);

        //Cambia el estado  eliminado del empleado
        $empleado = Empleado::find($id);
        $empleado->eliminado = true;

        //Cambia el estado eliminado de las areas dependientes de este empleado
        DB::table('areas')->where('departamento_id',$empleado->id)->update(['eliminado'=>true]);

        Log::info( 'Empleado eliminado: ' .$mensaje->id . ' ' . $mensaje->nombre . ' ' . $mensaje->codigo );
        $empleado->save();

        return back()->with('info', 'Eliminado correctamente');
    }
        
}

