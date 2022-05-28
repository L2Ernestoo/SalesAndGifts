<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index(){

        $ventas = Ventas::all();
        return view('ventas.index', compact('ventas'));
    }
}
