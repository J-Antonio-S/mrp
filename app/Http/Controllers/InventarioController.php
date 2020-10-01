<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Inventario;
use App\Almacen;
use App\TipoMovimiento;
use App\MateriaPrima;
use App\Articulo;
use Illuminate\Support\Facades\DB;

class InventarioController extends Controller
{
    public function index()
    {
        $inventarios = DB::table('inventarios')
            ->join('almacens', 'inventarios.almacen_id', '=', 'almacens.id')
            ->join('tipo_movimiento', 'inventarios.tipo_mov_id', '=', 'tipo_movimiento.id')
            ->select('inventarios.*', 'almacens.nombre as almacenNombre', 'tipo_movimiento.nombre as tipoNombre')
            ->paginate(15);
        return view('inventario/inventario.index', compact('inventarios'));
    }
    public function create()
    {
        $almacenes = Almacen::all();
        $tipo_movimiento = TipoMovimiento::all();
        $inventario = Inventario::first();
        $contador = Inventario::count();
        return view('inventario/inventario.create', compact('almacenes'), compact('tipo_movimiento','inventario', 'contador'));
    }
    public function store(Request $request)
    {
        $inventario = Inventario::create($request->all());
        $almacenes = Almacen::all();
        $tipo_movimiento = TipoMovimiento::all();

        return redirect()->route('inventario.edit', $inventario->id)
            ->with('info', 'Mov Inventario guardado con éxito');
    }

    public function edit($id)
    {
        $inventario = Inventario::find($id);
        $almacenes = Almacen::all();
        $tipo_movimiento = TipoMovimiento::all();

        return view('inventario/inventario.edit', compact('inventario'), compact('almacenes', 'tipo_movimiento'));
    }


    public function show($id)
    {
        $inventario = Inventario::find($id);
        $almacen = Almacen::find($inventario->almacen_id);
        $tipo = TipoMovimiento::find($inventario->tipo_mov_id);

        $materia_primas = MateriaPrima::all();
        $articulos      = Articulo::all();

        return view('inventario/inventario.show', compact('inventario'), compact('almacen', 'tipo', 'materia_primas', 'articulos'));
    }

    public function update(Request $request, $id)
    {
        $inventario = Inventario::find($id);
        $inventario->codigo = $request->input('codigo');
        $inventario->almacen_id= $request->input('almacen_id');
        $inventario->tipo_mov_id= $request->input('tipo_mov_id');
        $inventario->save();

        return redirect()->route('inventario.edit', $inventario->id)
            ->with('info', 'Mov Inventario guardado con éxito');
    }

    public function destroy($id)
    {

        $mensaje = Inventario::find($id);
        $inventario = Inventario::find($id)->delete();

        Log::info( 'Mov Inventario eliminado: ' .$mensaje->id . ' ' . $mensaje->codigo  );
        return back()->with('info', 'Eliminado correctamente');
    }
}
