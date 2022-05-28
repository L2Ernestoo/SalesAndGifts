<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\DetalleVentas;
use App\Models\Productos;
use App\Models\Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class POSController extends Controller
{
    public function index(){
        $productos = Productos::all();
        return view('pos.index', compact('productos'));
    }

    public function findProducto(Request $request){
        $producto = Productos::find($request->id);

        return response()->json([
            'id' => $producto->id,
            'nombre' => $producto->nombre,
            'precio' => $producto->precio
        ]);
    }

    public function store(Request $request){

        if($request->cliente['nit'] == ''){
            $cliente = 1; //Consumidor Final
        }else{
            $cliente = Clientes::where('nit', $request->cliente['nit'])->first();
        }

        if(empty($cliente)){
            $cliente = new Clientes;
            $cliente->nit = $request->cliente['nit'];
            $cliente->nombres = $request->cliente['nombre'];
            $cliente->apellidos = $request->cliente['apellido'];
            $cliente->direccion = $request->cliente['direccion'];
            $cliente->save();
        }
        $cliente = $cliente->id;

        $venta = new Ventas;
        $venta->total = $request->total;
        $venta->users_id = Auth::user()->id;
        $venta->clientes_id = $cliente;
        $venta->save();

        foreach ($request->listado as $item){
            $detalle = new DetalleVentas;
            $detalle->cantidad = $item['cantidad'];
            $detalle->productos_id = $item['id'];
            $detalle->ventas_id = $venta->id;
            $detalle->save();
        }

        return response()->json([
           'status' => 'OK',
           'code' => 200,
           'msg' => 'Venta registrada con exito'
        ]);
    }


}
