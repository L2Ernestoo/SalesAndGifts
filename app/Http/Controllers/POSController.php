<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

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


}
