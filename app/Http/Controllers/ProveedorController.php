<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

use App\Estado;
use App\Provincia;
use App\Municipio;
use App\Contacto;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProveedorController extends Controller
{
    public function byEstado($id)
    {   
        return Provincia::where('id_estado', $id)->get();
    }
    public function byProvincia($id)
    {   
        return Municipio::where('id_provincia', $id)->get();
    }

    public function index()
    {
        $proveedores = DB::table('proveedors')
        ->join('municipio', 'municipio.id', '=', 'id_municipio')
        ->select('proveedors.*',
                 'municipio.nombre as municipio'
                )
        ->orderBy('codigo')
        ->paginate(15);

        return view('sprint2/proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor      = Proveedor::first();
        $estados        = Estado::orderBy('nombre', 'asc')->get();

        $municipios     = Municipio::orderBy('nombre', 'asc')->get();

        return view('sprint2/proveedor.create', compact('proveedor', 'estados' ,'municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = Proveedor::create($request->all());

        return redirect()->route('proveedores.show', $proveedor->id)
            ->with('info', 'Proveedor guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor      = Proveedor::find($id);
        $municipio      = Municipio::find($proveedor->id_municipio);
        
        $provincia      = Provincia::find($municipio->id_provincia);
        $estado         = Estado::find($provincia->id_estado);
        $contactos      = Contacto::where('id_proveedor',$proveedor->id)->get();
        return view('sprint2/proveedor.show', compact('proveedor','municipio','provincia','estado','contactos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = DB::table('proveedors')
        ->join('municipio', 'municipio.id', '=', 'id_municipio')
        ->join('provincia', 'provincia.id', '=', 'municipio.id_provincia')
        ->where('proveedors.id','=',$id)
        ->select('proveedors.*',
                 'municipio.nombre as municipio',
                 'provincia.nombre as provincia',
                 'provincia.id as id_provincia',
                 'provincia.id_estado as id_estado'
                )->first();
        $municipios     = Municipio::orderBy('nombre', 'asc')->get();
        $estados        = Estado::orderBy('nombre', 'asc')->get();

        return view('sprint2/proveedor.edit', compact('proveedor','municipios','estados'));
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
        $proveedor = Proveedor::find($id);
        $proveedor->codigo = $request->input('codigo');
        $proveedor->nombre = $request->input('nombre');
        $proveedor->imagen = $request->input('imagen');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->correo = $request->input('correo');
        
        $proveedor->id_municipio = $request->input('id_municipio');

        $proveedor->estado = $request->input('estado');
        $proveedor->save();

        return redirect()->route('proveedores.edit', $proveedor->id)
            ->with('info', 'Proveedor guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mensaje = Proveedor::find($id);

        //Cambia el estado  eliminado del proveedor
        $proveedor = Proveedor::find($id);
        $proveedor->eliminado = true;

        //Cambia el estado eliminado de las areas dependientes de este proveedor
        DB::table('areas')->where('departamento_id',$proveedor->id)->update(['eliminado'=>true]);

        Log::info( 'Proveedor eliminado: ' .$mensaje->id . ' ' . $mensaje->nombre . ' ' . $mensaje->codigo );
        $proveedor->save();

        return back()->with('info', 'Eliminado correctamente');
    }
}
